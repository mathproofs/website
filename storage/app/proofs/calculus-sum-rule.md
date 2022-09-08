---
title: Sum rule in calculus
description: This proofs shows that the derivative of two functions is the derivative of the first function plus the derivative of the second function.
category: calculus
---

## Statement

The derivative of two functions is the derivative of the first function plus the derivative of the second function.

$$ \tfrac{d}{dx}\bigg(g(x) + j(x)\bigg) = g'(x) + j'(x) $$

## Proof

Define function $ f $.

$$ f(x) = g(x) + j(x) $$

Use the definition of the derivative.

$$ f'(x) = \lim\_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(x + h) + j(x + h) - (g(x) + j(x))}{h}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(x + h) + j(x + h) - g(x) - j(x)}{h}\right) $$

Rearrange the terms and split the fraction.

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(x + h) - g(x) + j(x + h) - j(x)}{h}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(x + h) - g(x)}{h} + \frac{j(x + h) - j(x)}{h}\right) $$

Split the limit.

$$ f'(x) = \lim\_{h \to 0}\left(\frac{g(x + h) - g(x)}{h}\right) + \lim\_{h \to 0}\left(\frac{j(x + h) - j(x)}{h}\right) $$

Now two definitions of the derivative arised.

$$ f'(x) = g'(x) + j'(x) $$
