---
title: Chain rule in calculus
description: This proofs show that the derivative of a nested function is the derivative of the outer function multiplied by the derivative of the inner function.
category: calculus
foundations: [definition-of-derivative]
---

## Statement

The derivative of a nested function is the derivative of the outer function multiplied by the derivative of the inner function.

$$ \tfrac{d}{dx}\bigg(g(j(x))\bigg) = g'(j(x)) \* j'(x) $$

## Proof

Define function $ f $.

$$ f(x) = g(j(x)) $$

Take [the definition for the derivative](/proofs/definition-of-derivative).

$$ f'(x) = \lim\_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(j(x + h)) - g(j(x))}{h}\right) $$

Multiply the numerator and denominator of the fraction by $ j(x + h) - j(x) $ and split the limit.

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(j(x + h)) - g(j(x))}{h} \* \frac{j(x + h) - j(x)}{j(x + h) - j(x)}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(j(x + h)) - g(j(x))}{j(x + h) - j(x)} \* \frac{j(x + h) - j(x)}{h}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(j(x + h)) - g(j(x))}{j(x + h) - j(x)}\right) \* \lim\_{h \to 0}\left(\frac{j(x + h) - j(x)}{h}\right) $$

Let $ k = j(x + h) - j(x) $. From this follows that $ j(x + h) = k + j(x) $.

Now we can conclude that as $ h $ approaches to $ 0 $, so does $ k $:

$$ k = j(x + h) - j(x) = j(x + 0) - j(x) = j(x) - j(x) = 0 $$

Substitute $ k $ in the derivative.

$$ f'(x) = \lim\_{k \to 0}\left(\frac{g(j(x + h)) - g(j(x))}{k}\right) \* \lim\_{h \to 0}\left(\frac{j(x + h) - j(x)}{h}\right) $$

Here are the definitions of the derivative for $ g(j(x)) $ and $ j(x) $.

$$ f'(x) = g'(j(x)) \* j'(x) $$
