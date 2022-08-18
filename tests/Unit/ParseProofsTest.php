<?php

use App\Services\Parser;

it('can parse a proof', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: This is a proof
        ---

        Here is the proof's body.
        MARKDOWN;

    expect(Parser::parse($proof))->toBe([
        'title' => 'This is a proof',
        'category' => null,
        'body' => '<p>Here is the proof\'s body.</p>',
    ]);
});

it('can parse a proof with markdown contents', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: Do something and be done!
        ---

        ## Statement

        Here is the proof's body.

        ## Proof

        Do something and you're done!
        MARKDOWN;

    expect(Parser::parse($proof))->toBe([
        'title' => 'Do something and be done!',
        'category' => null,
        'body' => '<h2>Statement</h2><p>Here is the proof\'s body.</p><h2>Proof</h2><p>Do something and you\'re done!</p>',
    ]);
});

it('can parse proofs with categories', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: Do something and be done!
        category: algebra
        ---

        Here is the proof's body.
        MARKDOWN;

    expect(Parser::parse($proof))->toBe([
        'title' => 'Do something and be done!',
        'category' => 'algebra',
        'body' => '<p>Here is the proof\'s body.</p>',
    ]);
});
