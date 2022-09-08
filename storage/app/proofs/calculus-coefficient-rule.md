---
title: Coefficient rule in calculus
description: This proof shows that the derivative of a function with a coefficient is the coefficient times the derivative of that function.
category: calculus
foundations: [definition-of-derivative]
---

## Statement

The derivative of a function with a coefficient is the coefficient times the derivative of that function.

$$ \tfrac{d}{dx}\bigg(c*g(x)\bigg) = c * g'(x) $$

## Proof

Define function $ f $.

$$ f(x) = c * g(x) $$

Take [the definition of the derivative](/proofs/definition-of-derivative).

$$ f'(x) = \lim_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

$$ f'(x) = \lim_{h \to 0}\left(\frac{c * g(x + h) - c * g(x)}{h}\right) $$

Factor out the $ c $ and move it out the fraction.

$$ f'(x) = \lim_{h \to 0}\left(\frac{c * \bigg(g(x + h) - g(x)\bigg)}{h}\right) $$

$$ f'(x) = \lim_{h \to 0}\left( c * \frac{g(x + h) - g(x)}{h}\right) $$

Move the $ c $ out the limit.

$$ f'(x) = c * \lim_{h \to 0}\left(\frac{g(x + h) - g(x)}{h}\right) $$

Now the definition of the derivative of $ g(x) $ arised.

$$ f'(x) = c * g'(x) $$
