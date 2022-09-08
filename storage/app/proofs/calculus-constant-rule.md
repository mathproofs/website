---
title: Constant rule in calculus
description: This proofs shows that the derivative of a constant is always zero.
category: calculus
foundations: [definition-of-derivative]
---

## Statement

The derivative of a constant is always $ 0 $.

$$ \tfrac{d}{dx}(c) = 0 $$

## Proof

Define function $ f $.

$$ f(x) = c $$

Take [the definition of the derivative](/proofs/definition-of-derivative).

$$ f'(x) = \lim_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

Substitue $ f(x) = c $ and $ f(x + h) = c $.

$$ f'(x) = \lim_{h \to 0}\left(\frac{c - c}{h}\right) $$

Finally, simplify.

$$ f'(x) = \lim_{h \to 0}\left(\frac{0}{h}\right) $$

$$ f'(x) = \lim_{h \to 0}\big(0\big) $$

$$ f'(x) = 0 $$
