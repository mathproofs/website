---
title: Power rule in calculus
description: This proofs shows that the derivative of x^r is r * x^(r - 1).
category: calculus
foundations: [calculus-chain-rule, derivative-of-ex, adding-exponents]
---

## Statement

The derivative of $ x^r $ is $ r \* x^{r-1} $, where $ r $ is a real number.

$$ \tfrac{d}{dx}(x^r) = r * x^{r-1}, r \in \Reals $$

## Proof

Define function $ f $.

$$ f(x) = x^r $$

Rewrite the function using $ e $ and $ \ln $. Since they are inverse functions, it stays exactly the same.

$$ f(x) = e^{\ln(x^r)} $$

Differentiate this function [by the derivative of e^x](/proofs/derivative-of-ex), and mutliply by the [chain rule](/proofs/calculus-chain-rule).

$$ f'(x) = e^{\ln(x^r)} * \tfrac{d}{dx}(\ln(x^r)) $$

The first factor simplifies to $ x^r $, since $ e $ and $ \ln $ are inverses.

$$ f'(x) = x^r * \tfrac{d}{dx}(\ln(x^r)) $$

For the second factor, bring down the exponent $ r $ using the properties of logarithms. Then bring $ r $ out of the $ \frac{d}{dx} $ function.

$$ f'(x) = x^r * r * \tfrac{d}{dx}(\ln(x)) $$

The derivative of $ \ln(x) $ is $ \frac{1}{x} $.

$$ f'(x) = x^r * r * \frac{1}{x} $$

Now simplify this function to the final result by using negative exponents and [adding exponents](/proofs/adding-exponents).

$$ f'(x) = r * x^r * x^{-1} $$

$$ f'(x) = r * x^{r - 1} $$
