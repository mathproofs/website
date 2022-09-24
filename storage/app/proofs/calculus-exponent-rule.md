---
title: Exponent rule in calculus
description: This proofs show the derivative of a^x is a^x * ln(a).
category: calculus
foundations:
    [
        derivative-of-ex,
        calculus-chain-rule,
        logarithm-power-rule,
        calculus-coefficient-rule,
        calculus-power-rule
    ]
---

## Statement

The derivative of $ a^x $ is $ a^x \* \ln(a) $:

$$ \tfrac{d}{dx}(a^x) = a^x \* \ln(a) $$

## Proof

Define function $ f $.

$$ f(x) = a^x $$

Now write it using $ e^{...} $ and $ \ln(...) $. This is allowed because they are inverse functions.

$$ f(x) = e^{\ln(a^x)} $$

Differentiate this function using [the derivative of $ e^x $](/proofs/derivative-of-ex) and [the chain rule](/proofs/calculus-chain-rule).

$$ f'(x) = e^{\ln(a^x)} \* \tfrac{d}{dx}\bigg(\ln(a^x)\bigg) $$

For the first factor, $ e^{...} $ and $ \ln(...) $ cancel because they are inverse functions.

For the second factor, multiply the logarithm by the exponent because of [the power rule](/proofs/logarithm-power-rule).

$$ f'(x) = a^x \* \tfrac{d}{dx}\bigg(\ln(a) \* x\bigg) $$

Finally, differentiate the final derivative using [the coefficient rule](/proofs/calculus-coefficient-rule) and [the power rule](/proofs/calculus-power-rule).

$$ f'(x) = a^x \* \ln(a) $$
