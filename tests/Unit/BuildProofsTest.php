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
