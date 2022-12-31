---
title: "Heron's formula: area of triangle"
description: This shows Heron's formula for finding the area of any triangle.
category: geometry
foundations: [pythagorean-theorem, factoring-difference-of-squares]
---

## Statement

For any triangle with sides $ a $, $ b $ and $ c $, the area is given by:

$$ A = \sqrt{s(s - a)(s - b)(s - c)} \text{, where } s = \frac{a + b + c}{2} $$

![A triangle with sides a, b and c](/proofs/herons-formula-statement.svg)

## Proof

Construct triangle with sides $ a $, $ b $ and $ c $. Then draw altitude $ h $ on side $ b $, dividing $ b $ in $ b_1 $ and $ b_2 $. See the image below.

![A triangle with sides a, b and c and altitude h on a](/proofs/herons-formula-proof.svg)

The area of this triangle is given by:

$$ A = \tfrac{1}{2} \cdot b \cdot h $$

Using the [Pythagorean theorem](/proofs/pythagorean-theorem), find that:

$$ a^2 = h^2 + b_1^2 \implies h^2 = a^2 - b_1^2 $$

$$ c^2 = h^2 + b_2^2 \implies h^2 = c^2 - b_2^2 $$

Since both equations equal $ h^2 $, set them equal to eachother and then isolate the $ b $-terms:

$$ a^2 - b_1^2 = c^2 - b_2^2 $$

Substitute $ b = b_1 + b_2 \implies b_1 = b - b_2 $ and expand the brackets:

$$ a^2 - (b - b_2)^2 = c^2 - b_2^2 $$

$$ a^2 - (b^2 - 2b \cdot b_2 + b_2^2) = c^2 - b_2^2 $$

$$ a^2 - b^2 + 2b \cdot b_2 - b_2^2 = c^2 - b_2^2 $$

$$ a^2 - b^2 + 2b \cdot b_2 = c^2 $$

Solve for $ b_2 $.

$$ 2b \cdot b_2 = b^2 + c^2 - a^2 $$

$$ b_2 = \frac{b^2 + c^2 - a^2}{2b} $$

Use the equation $ h^2 = c^2 - b_2^2 $ once again and substitute $ b_2 $.

$$ h = \sqrt{c^2 - \left(\frac{b^2 + c^2 - a^2}{2b}\right)^2} $$

When substituting $ h $ into the area formula, you get:

$$ A = \tfrac{1}{2} \cdot b \cdot \sqrt{c^2 - \left(\frac{b^2 + c^2 - a^2}{2b}\right)^2} $$

## Simplifying the formula

Bring the square to the numerator and the denominator and make a common denominator.

$$ A = \tfrac{1}{2}b \cdot \sqrt{\frac{4b^2c^2}{4b^2} - \frac{(b^2 + c^2 - a^2)^2}{4b^2}} $$

$$ A = \tfrac{1}{2}b \cdot \sqrt{\frac{4b^2c^2 - (b^2 + c^2 - a^2)^2}{4b^2}} $$

Bring the $ \frac{1}{2}b $ factor in the square root and simplify.

$$ A = \sqrt{\tfrac{1}{4}b^2} \cdot \sqrt{\frac{4b^2c^2 - (b^2 + c^2 - a^2)^2}{4b^2}} $$

$$ A = \sqrt{\tfrac{1}{4}b^2 \cdot \frac{4b^2c^2 - (b^2 + c^2 - a^2)^2}{4b^2}} $$

$$ A = \sqrt{\frac{4b^2c^2 - (b^2 + c^2 - a^2)^2}{16}} $$

Write $ 4b^2c^2 $ as a square and factor using [the difference of squares](/proofs/factoring-difference-of-squares).

$$ A = \sqrt{\frac{(2bc)^2 - (b^2 + c^2 - a^2)^2}{16}} $$

$$ A = \sqrt{\frac{(2bc + b^2 + c^2 - a^2)(2bc - b^2 - c^2 + a^2)}{16}} $$

Rearrange the terms and factor out perfect squares.

$$ A = \sqrt{\frac{\bigg(b^2 + 2bc + c^2 - a^2\bigg)\bigg(a^2 - (b^2 - 2bc + c^2)\bigg)}{16}} $$

$$ A = \sqrt{\frac{\bigg((b + c)^2 - a^2\bigg)\bigg(a^2 - (b - c)^2\bigg)}{16}} $$

Factor using [the difference of squares](/proofs/factoring-difference-of-squares) once again.

$$ A = \sqrt{\frac{\bigg((b + c - a)(b + c + a)\bigg)\bigg((a + b - c)(a - b + c)\bigg)}{16}} $$

$$ A = \sqrt{\frac{(b + c - a)(b + c + a)(a + b - c)(a - b + c)}{16}} $$

Distribute the $ 16 = 2^4 $ to each factor.

$$ A = \sqrt{\frac{b + c - a}{2} \cdot \frac{b + c + a}{2} \cdot \frac{a + b - c}{2} \cdot \frac{a - b + c}{2}} $$

Let $ s = \dfrac{a + b + c}{2} $.

Note that:

$$ \frac{b + c - a}{2} = \frac{b + c + a - 2a}{2} = \frac{b + c + a}{2} - a = s - a $$

$$ \frac{a + b - c}{2} = \frac{a + b + c - 2c}{2} = \frac{a + b + c}{2} - c = s - c $$

$$ \frac{a - b + c}{2} = \frac{a + b + c - 2b}{2} = \frac{a + b + c}{2} - b = s - b $$

When substituting these, you get:

$$ A = \sqrt{(s - a) \cdot s \cdot (s - c) \cdot (s - b)} $$

Finally, rearrange these factors to get:

$$ A = \sqrt{s(s - a)(s - b)(s - c)} $$
