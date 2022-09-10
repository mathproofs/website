---
title: Pythagorean theorem
description: 'This proofs shows how the famous Pythagorean theorem works: a^2 + b^2 = c^2'
category: geometry
---

## Statement

In a right triangle with the hypotenuse side being called $ c $ and the other sides $ a $ and $ b $, the following equation applies:

$$ a^2 + b^2 = c^2 $$

![A right triangle with sides a, b and c](/proofs/pythagorean-theorem-1.svg)

## Proof

Draw a square and four identical triangles inside it. Now the larger square contains a smaller square, like this:

![A square with four identical triangles inside it](/proofs/pythagorean-theorem-2.svg)

The area of the large square is $ (a + b) \* (a + b) = (a + b)^2 $.

The area of the smaller square is $ c \* c = c^2 $.

The area of one of the triangles is $ \frac{1}{2} \* a \* b $. Thus the area of all four triangles combined is $ 4 \* (\frac{1}{2} \* a \* b) = 2ab $.

Note that the area of the bigger square is the same as the area of the four triangles and the area of the small square.

$$ \overbrace{(a + b)^2}^\text{large square} = \overbrace{2ab}^\text{four triangles} + \overbrace{c^2}^\text{small square} $$

When you expand the left hand side, you get the following.

$$ a^2 + 2ab + b^2 = 2ab + c^2 $$

Subtract $ 2ab $ from both sides to get the final result.

$$ a^2 + b^2 = c^2 $$

And hereby the Pythagorean theorem is proven.
