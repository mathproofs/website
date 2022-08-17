<?php

use App\Models\Proof;
use Illuminate\Support\Facades\Storage;

beforeEach(function () {
    $proof = <<<'MARKDOWN'
        ---
        title: This is a proof
        ---

        Here is the proof's body.
        MARKDOWN;

    Storage::put('proofs/@test-proof.md', $proof);
});

afterEach(function () {
    Storage::delete('proofs/@test-proof.md');
});

it('can build a proof', function () {
    expect(Proof::count())->toBe(0);

    $this->artisan('app:parse-proofs');

    expect(Proof::count())->not()->toBe(0);
    expect(Proof::first()->title)->toBe('This is a proof');
    expect(Proof::first()->slug)->toBe('@test-proof');
    expect(Proof::first()->body)->toBe('<p>Here is the proof\'s body.</p>');
});
