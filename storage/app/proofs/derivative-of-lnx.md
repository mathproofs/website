---
title: The derivative of ln(x)
description: This proof shows that the derivative of ln(x) is 1/x.
category: calculus
foundations: [derivative-of-ex, calculus-chain-rule, calculus-power-rule]
---

## Statement

The derivative of $ \ln(x) $ is $ \frac{1}{x} $:

$$ \tfrac{d}{dx}\bigg(\ln(x)\bigg) = \frac{1}{x} $$

## Proof

Let $ y = \ln(x) $.

Raise both sides to a power with base $ e $. Since $ e^{...} $ and $ \ln(...) $ are inverse functions, they cancel.

$$ e^y = e^{\ln(x)} $$

$$ e^y = x $$

Differentiate both sides with respect to $ x $. The left sides is differentiated using [the derivative of $ e^x $](/proofs/derivative-of-ex) and [the chain rule](/proofs/calculus-chain-rule). The right side is just $ 1 $, thanks to [the power rule](/proofs/calculus-power-rule).

$$ \tfrac{d}{dx}(e^y) = \tfrac{d}{dx}(x) $$

$$ e^y \* y' = 1 $$

Finally, divide both sides by $ e^y $ and substitute $ e^y = x $.

$$ y' = \frac{1}{e^y} = \frac{1}{x} $$
