---
title: The sum of logarithms
description: This proof shows that the sum of two logarithms with the same base is just one logarithm with the inside parts being multiplied.
category: algebra
---

## Statement

When two logarithms with the same base ($ a $) are added, the inside parts are multiplied:

$$ \log_a(b) + \log_a(c) = \log_a(bc) $$

## Proof

Given the sum $ \log_a(b) + \log_a(c) $, let $ x $ and $ y $ be the terms of the sum. By the definition of the logarithm, the following applies:

$$ x = \log_a(b) \implies a^x = b $$

$$ y = \log_a(c) \implies a^y = c $$

Now multiply $ b $ and $ c $. By properties of exponentials, add the exponents.

$$ b \* c = a^x \* a^y = a^{x + y} $$

Take the logarithm with base $ a $ on both sides.

$$ \log_a(b \* c) = \log_a(a^{x + y}) $$

Simplify the second logarithm, since $ \log_a(...) $ and $ a^{...} $ are inverse operations.

$$ \log_a(bc) = x + y $$

Finally, re-substitute $ x $ and $ y $ and flip the equation.

$$ \log_a(bc) = \log_a(b) + \log_a(c) $$

$$ \log_a(b) + \log_a(c) = \log_a(bc) $$
