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
        'description' => null,
        'category' => null,
        'foundations' => [],
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
        'description' => null,
        'category' => null,
        'foundations' => [],
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
        'description' => null,
        'category' => 'algebra',
        'foundations' => [],
        'body' => '<p>Here is the proof\'s body.</p>',
    ]);
});

it('can have a description', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: This is a function
        description: This function is called f.
        category: algebra
        ---

        Define function $ f $:

        $$ f(x) = x^2 + 3x $$
        MARKDOWN;

    expect(Parser::parse($proof))->toBe([
        'title' => 'This is a function',
        'description' => 'This function is called f.',
        'category' => 'algebra',
        'foundations' => [],
        'body' => '<p>Define function $ f $:</p><p>$$ f(x) = x^2 + 3x $$</p>',
    ]);
});

it('can have foundations', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: Functional proof
        foundations: [functions, something-else]
        ---

        This proof is about functions.
        MARKDOWN;

    expect(Parser::parse($proof))->toBe([
        'title' => 'Functional proof',
        'description' => null,
        'category' => null,
        'foundations' => ['functions', 'something-else'],
        'body' => '<p>This proof is about functions.</p>',
    ]);
});
