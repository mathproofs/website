---
title: Change of base formula for logarithms
description: This proofs shows that every logarithm can be written as a division of two logarithms with a custom base.
category: algebra
foundations: [multiplying-exponents]
---

## Statement

Every logarithm can be written as a division of two logarithms with a custom base:

$$ \log_a(b) = \frac{\log_c(b)}{\log_c(a)} $$

## Proof

Let $ x $, $ y $ and $ z $ be logartihms and write them as exponentials.

$$ x = \log_a(b) \implies b = a^x $$

$$ y = \log_c(b) \implies b = c^y $$

$$ z = \log_c(a) \implies a = c^z $$

From $ b = a^x $ and $ b = c^y $ follows the following.

$$ a^x = c^y $$

Now substitute $ a = c^z $.

$$ (c^z)^x = c^y $$

[Multiply the exponents](/proofs/multiplying-exponents) and set them equal to eachother.

$$ c^{xz} = c^y $$

$$ xz = y $$

Divide both sides by $ z $ to isolate $ x $.

$$ x = \frac{y}{z} $$

Finally, re-substitue $ x $, $ y $ and $ z $.

$$ \log_a(b) = \frac{\log_c(b)}{\log_c(a)} $$
