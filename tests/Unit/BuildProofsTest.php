<?php

use App\Models\Category;
use App\Models\Proof;
use Illuminate\Support\Facades\Storage;

it('can build a proof', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: This is a proof
        ---

        Here is the proof's body.
        MARKDOWN;

    Storage::put('proofs/@test-proof.md', $proof);

    expect(Proof::count())->toBe(0);

    $this->artisan('app:parse-proofs');

    expect(Proof::count())->not()->toBe(0);
    expect(Proof::first()->title)->toBe('This is a proof');
    expect(Proof::first()->slug)->toBe('@test-proof');
    expect(Proof::first()->description)->toBeNull();
    expect(Proof::first()->category)->toBeNull();
    expect(Proof::first()->body)->toBe('<p>Here is the proof\'s body.</p>');

    Storage::delete('proofs/@test-proof.md');
});

it('can parse the category', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: Some integral
        category: calculus
        ---

        This is an integral.
        MARKDOWN;

    Storage::put('proofs/@test-proof.md', $proof);

    expect(Proof::count())->toBe(0);

    $this->artisan('app:parse-proofs');

    expect(Proof::count())->not()->toBe(0);
    expect(Proof::first()->title)->toBe('Some integral');
    expect(Proof::first()->slug)->toBe('@test-proof');
    expect(Proof::first()->description)->toBeNull();
    expect(Proof::first()->category)->toBe(Category::CALCULUS);
    expect(Proof::first()->body)->toBe('<p>This is an integral.</p>');

    Storage::delete('proofs/@test-proof.md');
});

it('can parse the description', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: Some integral
        description: This integral does not have dx.
        ---

        This is an integral.
        MARKDOWN;

    Storage::put('proofs/@test-proof.md', $proof);

    expect(Proof::count())->toBe(0);

    $this->artisan('app:parse-proofs');

    expect(Proof::count())->not()->toBe(0);
    expect(Proof::first()->title)->toBe('Some integral');
    expect(Proof::first()->slug)->toBe('@test-proof');
    expect(Proof::first()->description)->toBe('This integral does not have dx.');
    expect(Proof::first()->category)->toBeNull();
    expect(Proof::first()->body)->toBe('<p>This is an integral.</p>');

    Storage::delete('proofs/@test-proof.md');
});

it('connects foundations to implications', function () {
    $foundation = <<<'MARKDOWN'
        ---
        title: Foundation
        ---

        This is a foundation.
        MARKDOWN;

    $implication = <<<'MARKDOWN'
        ---
        title: Implication
        foundations: [foundation]
        ---

        This is an implication.
        MARKDOWN;

    Storage::put('proofs/foundation.md', $foundation);
    Storage::put('proofs/implication.md', $implication);

    expect(Proof::count())->toBe(0);

    $this->artisan('app:parse-proofs');

    expect(Proof::count())->not()->toBe(0);

    $foundationProof = Proof::where('slug', 'foundation')->firstOrFail();
    expect($foundationProof->title)->toBe('Foundation');
    expect($foundationProof->slug)->toBe('foundation');
    expect($foundationProof->description)->toBeNull();
    expect($foundationProof->category)->toBeNull();
    expect($foundationProof->body)->toBe('<p>This is a foundation.</p>');

    $implicationProof = Proof::where('slug', 'implication')->firstOrFail();
    expect($implicationProof->title)->toBe('Implication');
    expect($implicationProof->slug)->toBe('implication');
    expect($implicationProof->description)->toBeNull();
    expect($implicationProof->category)->toBeNull();
    expect($implicationProof->body)->toBe('<p>This is an implication.</p>');

    expect($implicationProof->foundations->first()->id)->toBe($foundationProof->id);
    expect($foundationProof->implications->first()->id)->toBe($implicationProof->id);

    Storage::delete('proofs/foundation.md');
    Storage::delete('proofs/implication.md');
});
