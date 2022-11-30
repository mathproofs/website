---
title: Derivative of tan(x)
description: This proof shows what the derivative of tan(x) is.
category: calculus
foundations: [tangent-sine-divided-by-cosine, calculus-quotient-rule]
---

## Statement

The derivative of $ \tan(x) $ is:

$$ \tfrac{d}{dx}\bigg(\tan(x)\bigg) = 1 + \tan(x)^2 $$

## Proof

Define function $ f $.

$$ f(x) = \tan(x) $$

Rewrite $ f $ by using [tangent is sine divided by cosine](/proofs/tangent-sine-divided-by-cosine).

$$ f(x) = \frac{\sin(x)}{\cos(x)} $$

Now differentiate this function with [the quotient rule](/proofs/calculus-quotient-rule), $ \frac{d}{dx}\big(\sin(x)\big) = \cos(x) $ and $ \frac{d}{dx}\big(\cos(x)\big) = -\sin(x) $.

$$ f'(x) = \frac{\cos(x)\* \cos(x) - \sin(x)\* - \sin(x)}{\cos(x)^2} $$

Simplify this function and split the fraction.

$$ f'(x) = \frac{\cos(x)^2 + \sin(x)^2}{\cos(x)^2} = \frac{\cos(x)^2}{\cos(x)^2} + \frac{\sin(x)^2}{\cos(x^2)} $$

Finally, use that [tangent is sine divided by cosine](/proofs/tangent-sine-divided-by-cosine).

$$ f'(x) = 1 + \tan(x)^2 $$
