---
title: Quotient rule in calculus
description: This proof shows that the derivative for the quotient or fraction a/b is (a'b - ab') / b^2.
category: calculus
foundations: [calculus-chain-rule, calculus-power-rule, calculus-product-rule]
---

## Statement

The derivative for quotients or fractions is the following.

$$ \frac{d}{dx}\left(\frac{g(x)}{j(x)}\right) = \frac{g'(x) \* j(x) - g(x) \* j'(x)}{j(x)^2} $$

## Proof

Define function $ f $ and write it as a product.

$$ f(x) = \frac{g(x)}{j(x)} $$

$$ f(x) = g(x) \* j(x)^{-1} $$

Differentiate $ f $ using the [product](/proofs/calculus-product-rule) rule.

$$ f'(x) = \tfrac{d}{dx}(g(x)) \* j(x)^{-1} + g(x) \* \tfrac{d}{dx}(j(x)^{-1}) $$

$$ f'(x) = g'(x) \* j(x)^{-1} + g(x) \* \tfrac{d}{dx}(j(x)^{-1}) $$

Differentiate $ \tfrac{d}{dx}(j(x)^{-1}) $ using the [power rule](/proofs/calculus-power-rule) and the [chain rule](/proofs/calculus-chain-rule).

$$ f'(x) = g'(x) \* j(x)^{-1} + g(x) \* -1 \* j(x)^{-2} \* \tfrac{d}{dx}(j(x)) $$

$$ f'(x) = g'(x) \* j(x)^{-1} - g(x) \* j(x)^{-2} \* j'(x) $$

Write negative exponents as fractions and make a common denominator.

$$ f'(x) = \frac{g'(x)}{j(x)} - \frac{g(x) \* j'(x)}{j(x)^{2}} $$

$$ f'(x) = \frac{g'(x) \* j(x)}{j(x)^2} - \frac{g(x) \* j'(x)}{j(x)^{2}} $$

$$ f'(x) = \frac{g'(x) \* j(x) - g(x) \* j'(x)}{j(x)^{2}} $$
