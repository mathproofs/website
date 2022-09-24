---
title: The difference of logarithms
description: This proof shows that the difference of two logarithms with the same base is just one logarithm with the inside parts being divided.
category: algebra
foundations: [logarithm-power-rule, sum-of-logarithms]
---

## Statement

The difference of two logarithms with the same base is just one logarithm with the inside parts being divided.

$$ \log_a(b) - \log_a(c) = \log\left(\frac{b}{c}\right) $$

## Proof

Write the difference as a sum.

$$ \log_a(b) + -1 \* \log_a(c) $$

Use the [logarithm power rule](/proofs/logarithm-power-rule) to write the following.

$$ \log_a(b) + \log_a(c^{-1}) $$

Now use the [logarithm sum rule](/proofs/sum-of-logarithms) to combine the logarithms.

$$ \log_a(b \* c^{-1}) $$

Finally, write the negative exponent as a fraction.

$$ \log_a\left(\frac{b}{c}\right) $$
