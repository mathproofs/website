---
title: Log rule in calculus
description: This proofs shows the derivative of a logarithmic function.
category: calculus
foundations: [derivative-of-lnx, change-of-base-logarithm, calculus-coefficient-rule]
---

## Statement

The derivative of a logarithmic function is given by:

$$ \tfrac{d}{dx}\bigg(\log_b(x)\bigg) = \frac{1}{x \* \ln(b)} $$

## Proof

Define function $ f $.

$$ f(x) = \log_b(x) $$

Rewrite the logarithm using [the change of base formula](/proofs/change-of-base-logarithm) with base $ e $ and write the denominator as a coefficient.

$$ f(x) = \frac{\ln(x)}{\ln(b)} = \frac{1}{\ln(b)} * \ln(x) $$

Differentiate this function by using [the coefficient rule](/proofs/calculus-coefficient-rule) and [the derivative of $ \ln(x) $](/proofs/derivative-of-lnx).

$$ f'(x) = \frac{1}{\ln(b)} \* \frac{1}{x} $$

Finally, multiply the fractions.

$$ f'(x) = \frac{1}{x \* \ln(b)} $$
