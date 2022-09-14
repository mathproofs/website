---
title: The logarithm power rule
description: This proofs shows that a logarithm of a power is the same as the exponent multiplied by that logarithm.
category: algebra
---

## Statement

The logarithm of a power is the same of the exponent multiplied by that logarithm:

$$ \log_a(b^c) = c \* \log_a(b) $$

## Proof

Let $ x = \log_a(b) $. Now rewrite it as a power.

$$ a^x = b $$

Raise both sides to the power $ c $.

$$ (a^x)^c = b^c $$

$$ a^{cx} = b^c $$

Take the logarithm with base $ a $ on both sides. Since $ \log_a $ and $ a^{...} $ are inverse operations, they cancel.

$$ \log_a(a^{cx}) = \log_a(b^c) $$

$$ c \* x = \log_a(b^c) $$

Finally, re-substitue $ x $ and flip the equation.

$$ c \* \log_a(b) = \log_a(b^c) $$

$$ \log_a(b^c) = c \* \log_a(b) $$
