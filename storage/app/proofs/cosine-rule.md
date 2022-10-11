---
title: Cosine rule
description: This proofs shows that the cosine rule is correct.
category: geometry
foundations: [pythagorean-theorem]
---

## Statement

In a triangle, the following equation applies for every angle:

$$ c^2 = a^2 + b^2 - 2ab\cos(\gamma) $$

![A triangle between points A, B and C](/proofs/cosine-rule.svg)

## Proof

Construct altitude $ h $ and divide side $ a $ in $ a_1 $ and $ a_2 $, like the image below.

![A triangle between points A, B and C with altitude h](/proofs/cosine-rule-proof.svg)

From the definition of cosine follows that $ \cos(\gamma) = \frac{a_1}{b} $.

Note that $ a = a_1 + a_2 $, which implies that $ a_2 = a - a_1 $.

Using the [Pythagorean theorem](/proofs/pythagorean-theorem) follow these equations:

$$ b^2 = a_1^2 + h^2 \implies h^2 = b^2 - a_1^2 $$

$$ c^2 = a_2^2 + h^2 \implies h^2 = c^2 - a_2^2 $$

Now combine these equations.

$$ b^2 - a_1^2 = c^2 - a_2^2 $$

Substitute $ a_2 = a - a_1 $ and expand the brackets.

$$ b^2 - a_1^2 = c^2 - (a - a_1)^2 $$

$$ b^2 - a_1^2 = c^2 - (a^2 - 2 * a * a_1 + a_1^2) $$

$$ b^2 - a_1^2 = c^2 - a^2 + 2 * a * a_1 - a_1^2 $$

Cancel like terms and isolate $ a_1 $.

$$ b^2 = c^2 - a^2 + 2 \* a \* a_1 $$

$$ 2 \* a \* a_1 = a^2 + b^2 - c^2 $$

$$ a_1 = \frac{a^2 + b^2 - c^2}{2a} $$

Now substitue $ a_1 $ in $ \cos(\gamma) = \frac{a_1}{b} $ and remove the complex fraction.

$$ \cos(\gamma) = \frac{\frac{a^2 + b^2 - c^2}{2a}}{b} = \frac{a^2 + b^2 - c^2}{2ab} $$

Finally, isolate $ c^2 $.

$$ 2ab\cos(\gamma) = a^2 + b^2 - c^2 $$

$$ c^2 = a^2 + b^2 - 2ab\cos(\gamma) $$
