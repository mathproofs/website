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
        'body' => '<p>Here is the proof\'s body.</p>',
    ]);
});

it('can parse math', function () {
    $proof = <<<'MARKDOWN'
        ---
        title: This is a function
        category: algebra
        ---

        Define function $ f $:

        $$ f(x) = x^2 + 3x $$
        MARKDOWN;

    expect(Parser::parse($proof))->toBe([
        'title' => 'This is a function',
        'description' => null,
        'category' => 'algebra',
        'body' => '<p>Define function <span class="katex"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>f</mi></mrow><annotation encoding="application/x-tex"> f </annotation></semantics></math></span>:</p><p><span class="katex"><math xmlns="http://www.w3.org/1998/Math/MathML" display="block"><semantics><mrow><mi>f</mi><mo stretchy="false">(</mo><mi>x</mi><mo stretchy="false">)</mo><mo>=</mo><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>x</mi></mrow><annotation encoding="application/x-tex"> f(x) = x^2 + 3x </annotation></semantics></math></span></p>',
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
        'body' => '<p>Define function <span class="katex"><math xmlns="http://www.w3.org/1998/Math/MathML"><semantics><mrow><mi>f</mi></mrow><annotation encoding="application/x-tex"> f </annotation></semantics></math></span>:</p><p><span class="katex"><math xmlns="http://www.w3.org/1998/Math/MathML" display="block"><semantics><mrow><mi>f</mi><mo stretchy="false">(</mo><mi>x</mi><mo stretchy="false">)</mo><mo>=</mo><msup><mi>x</mi><mn>2</mn></msup><mo>+</mo><mn>3</mn><mi>x</mi></mrow><annotation encoding="application/x-tex"> f(x) = x^2 + 3x </annotation></semantics></math></span></p>',
    ]);
});
