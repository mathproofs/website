---
title: Distance formula between a point and a line
description: This proof shows a formula for calculating the distance between a point and a line in the form of y = ax + b.
category: geometry
foundations: [pythagorean-theorem]
---

## Statement

The distance between the point $ P(x_P, y_P) $ and the line $ l: y = ax + b $ is given by:

$$ d(P, l) = \frac{| ax_P - y_P + b |}{\sqrt{a^2 + 1}} $$

## Picture

This picture can be used to better understand this proof. Remember that all points and lines have variable positions.

![A coordinate system showing all points and lines from this proof.](/proofs/distance-formula-point-line.png)

## Line k through P

Let $ k $ be the line where $ k \perp l $ and $ k $ goes through point $ P $.

Since $ k \perp l $, we can find the slope $ m_k $:

$$ m_k \* m_l = -1 \implies m_k \* a = -1 \implies m_k = -\frac{1}{a} $$

And since $ k $ goes through $ P(x_P, y_P) $, we can also find the $ y $-intercept $ b_k $:

$$ y_P = -\frac{1}{a}x_P + b_k \implies b_k = y_P + \frac{1}{a}x_P $$

Thus, this is line $ k $:

$$ k: y = -\frac{1}{a}x + y_P + \frac{1}{a}x_P $$

## Intersection Q between l and k

To find the intersection point $ Q $ for lines $ l $ and $ k $, we can set them equal to eachother:

$$ ax + b = -\frac{1}{a}x + y_P + \frac{1}{a}x_P $$

$$ ax + \frac{1}{a}x = y_P + \frac{1}{a}x_P - b $$

$$ x\left(a + \frac{1}{a}\right) = y_P + \frac{1}{a}x_P - b $$

$$ x = \frac{y_P + \frac{1}{a}x_P - b}{a + \frac{1}{a}} $$

Simplify this, we get:

$$ x = \frac{y_P + \frac{1}{a}x_P - b}{\frac{a^2 + 1}{a}} = \frac{ay_P + x_P - ab}{a^2 + 1} $$

Now to get $ y_Q $, substitute and simplify:

$$ y = a\left(\frac{ay_P + x_P - ab}{a^2 + 1}\right) + b = \frac{a^2y_P + ax_P - a^2b + b(a^2 + 1)}{a^2 + 1} = \frac{a^2y_P + ax_P + b}{a^2 + 1} $$

Thus, the coordinates of point $ Q $ are given by:

$$ Q = \left(\frac{ay_P + x_P - ab}{a^2 + 1}, \frac{a^2y_P + ax_P + b}{a^2 + 1}\right) $$

## Distance between Q and P

Since $ k \perp l $ and $ k $ goes through $ Q $ and $ P $, $ d(P, l) = d(Q, P) $. This distance can be found using the [Pythagorean theorem](/proofs/pythagorean-theorem).

$$ d(Q, P) = \sqrt{(x_Q - x_P)^2 + (y_Q - y_P)^2} $$

$$ d(Q, P) = \sqrt{\left(\frac{ay_P + x_P - ab}{a^2 + 1} - x_P\right)^2 + \left(\frac{a^2y_P + ax_P + b}{a^2 + 1} - y_P\right)^2} $$

To conclude, the distance between $ P(x_P, y_P) $ and the line $ l: y = ax + b $ is given by:

$$ d(P, l) = \sqrt{\left(\frac{ay_P + x_P - ab}{a^2 + 1} - x_P\right)^2 + \left(\frac{a^2y_P + ax_P + b}{a^2 + 1} - y_P\right)^2} $$

## Simplifying the formula

Let's now simplify the formula. First, combine the fractions.

$$ d(P, l) = \sqrt{\left(\frac{ay_P + x_P - ab - x_P(a^2 + 1)}{a^2 + 1}\right)^2 + \left(\frac{a^2y_P + ax_P + b - y_P(a^2 + 1)}{a^2 + 1}\right)^2} $$

Next, expand $ x_P(a^2 + 1) $ and $ y_P(a^2 + 1) $ and combine like terms.

$$ d(P, l) = \sqrt{\left(\frac{ay_P + x_P - ab - a^2x_P - x_P}{a^2 + 1}\right)^2 + \left(\frac{a^2y_P + ax_P + b - a^2y_P - y_P}{a^2 + 1}\right)^2} $$

$$ d(P, l) = \sqrt{\left(\frac{ay_P - ab - a^2x_P}{a^2 + 1}\right)^2 + \left(\frac{ax_P + b - y_P}{a^2 + 1}\right)^2} $$

Append the powers to the numerator and denominator, instead of the whole fraction. Then combine the fractions

$$ d(P, l) = \sqrt{\frac{(ay_P - ab - a^2x_P)^2}{(a^2 + 1)^2} + \frac{(ax_P + b - y_P)^2}{(a^2 + 1)^2}} $$

$$ d(P, l) = \sqrt{\frac{(ay_P - ab - a^2x_P)^2 + (ax_P + b - y_P)^2}{(a^2 + 1)^2}} $$

Factor out $ -a $ from the left square on the numerator, and reorder the terms.

$$ d(P, l) = \sqrt{\frac{\bigg((-a)(-y_P + b + ax_P)\bigg)^2 + (ax_P + b - y_P)^2}{(a^2 + 1)^2}} $$

$$ d(P, l) = \sqrt{\frac{\bigg((-a)(ax_P + b - y_P)\bigg)^2 + (ax_P + b - y_P)^2}{(a^2 + 1)^2}} $$

Append the square on both factors.

$$ d(P, l) = \sqrt{\frac{(-a)^2 \* (ax_P + b - y_P)^2 + (ax_P + b - y_P)^2}{(a^2 + 1)^2}} $$

$$ d(P, l) = \sqrt{\frac{a^2 \* (ax_P + b - y_P)^2 + 1 \* (ax_P + b - y_P)^2}{(a^2 + 1)^2}} $$

Factor out $ (ax_P + b - y_P)^2 $.

$$ d(P, l) = \sqrt{\frac{(a^2 + 1)(ax_P + b - y_P)^2}{(a^2 + 1)^2}} $$

Append the square root on each factor.

$$ d(P, l) = \frac{\sqrt{(a^2 + 1)} \* \sqrt{(ax_P + b - y_P)^2}}{\sqrt{(a^2 + 1)^2}} $$

Note that $ \sqrt{x^2} = | x | $. But since $ a^2 + 1 $ is always positive, no absolute value signs are required there.

$$ d(P, l) = \frac{\sqrt{(a^2 + 1)} \* | ax_P + b - y_P |}{a^2 + 1} $$

Finally, note that $ \frac{\sqrt{x}}{x} = \frac{1}{\sqrt{x}} $.

$$ d(P, l) = \frac{| ax_P + b - y_P |}{\sqrt{a^2 + 1}} $$
