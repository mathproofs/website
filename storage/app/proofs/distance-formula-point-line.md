---
title: Distance formula between a point and a line
description: This proof shows a formula for calculating the distance between a point and a line in the form of y = ax + b.
category: geometry
---

## Statement

The distance between the point $ P(x_P, y_P) $ and the line $ l: y = ax + b $ is given by:

$$ d(P, l) = \frac{| ax_P - y_P + b |}{\sqrt{a^2 + 1}} $$

## Picture

This picture can be used to better understand this proof. Remember that all points and lines have variable positions.

![A coordinate system showing all points and lines from this proof.](/proofs/distance-formula-point-line.png)

## Line k through O(0, 0)

Let $ k $ be the line where $ k \perp l $ and $ k $ goes through $ O(0, 0) $:

$$ k: y = m_kx + b_k $$

Since $ k \perp l $, we can find the slope $ m_k $:

$$ m_k \* m_l = -1 \implies m_k \* a = -1 \implies m_k = -\frac{1}{a} $$

And since $ k $ goes through $ O(0, 0) $, we can also find the $ y $-intercept $ b_k $:

$$ 0 = -\frac{1}{a} \* 0 + b_k \implies b_k = 0 $$

Thus, this is line $ k $:

$$ k: y = -\frac{1}{a}x $$

## Intersection Q between l and k

To find the intersection point $ Q $ for lines $ l $ and $ k $, we can set them equal to eachother:

$$ ax + b = -\frac{1}{a}x $$

$$ ax + \frac{1}{a}x = -b $$

$$ x\left(a + \frac{1}{a}\right) = -b $$

$$ x = \frac{-b}{a + \frac{1}{a}} $$

Simplify this, we get:

$$ x = \frac{-b}{\left(\frac{a^2 + 1}{a}\right)} = \frac{-ab}{a^2 + 1} $$

Now to get $ y_Q $, substitute and simplify:

$$ y = -\frac{1}{a} \* \frac{-ab}{a^2 + 1} = \frac{ab}{a(a^2 + 1)} = \frac{b}{a^2 + 1} $$

Thus, the coordinates of point $ Q $ are given by:

$$ Q = \left(\frac{-ab}{a^2 + 1}, \frac{b}{a^2 + 1}\right) $$

## Line n parallel to l

Let $ n $ be the line parallel to $ l $ that goes through $ P $.

Since $ n \parallel l $, their slopes are the same.

$$ m_n = m_l = a $$

And since $ n $ goes through $ P $, we can find the $ y $-intercept $ b_n $.

$$ y_P = ax_P + b_n \implies b_n = y_P - ax_P $$

Thus, this is line $ n $:

$$ n: y = ax + y_P - ax_P $$

## Intersection R between n and k

To find the intersection point $ R $ for lines $ n $ and $ k $, we can set them equal to eachother:

$$ ax + y_P - ax_P = -\frac{1}{a}x $$

$$ ax + \frac{1}{a}x = ax_P - y_P $$

$$ x\left(a + \frac{1}{a}\right) = ax_P - y_P $$

$$ x = \frac{ax_P - y_P}{\left(a + \frac{1}{a}\right)} $$

Simplify this, we get:

$$ x = \frac{ax_P - y_P}{\left(\frac{a^2 + 1}{a}\right)} = \frac{a^2x_P - ay_P}{a^2 + 1} $$

Now to get $ y_R $, substitute and simplify:

$$ y = -\frac{1}{a} \* \frac{a^2x_P - ay_P}{a^2 + 1} = \frac{ay_P - a^2x_P}{a(a^2 + 1)} = \frac{y_P - ax_P}{a^2 + 1} $$

Thus, the coordinates of point $ R $ are given by:

$$ R = \left(\frac{a^2x_P - ay_P}{a^2 + 1}, \frac{y_P - ax_P}{a^2 + 1}\right) $$

## Distance between Q and R

Since $ n \parallel l $, $ d(P, l) = d(Q, R) $. This can be found using the Pythagorean theorem.

$$ d(Q, R) = \sqrt{(x_Q - x_R)^2 + (y_Q - y_R)^2} $$

$$ d(Q, R) = \sqrt{\left(\frac{-ab}{a^2 + 1} - \frac{a^2x_P - ay_P}{a^2 + 1}\right)^2 + \left(\frac{b}{a^2 + 1} - \frac{y_P - ax_P}{a^2 + 1}\right)^2} $$

To conclude, the distance between $ P(x_P, y_P) $ and the line $ l: y = ax + b $ is given by:

$$ d(P, l) = \sqrt{\left(\frac{-ab}{a^2 + 1} - \frac{a^2x_P - ay_P}{a^2 + 1}\right)^2 + \left(\frac{b}{a^2 + 1} - \frac{y_P - ax_P}{a^2 + 1}\right)^2} $$

## Simplifying the formula

Let's now simplify the formula. First, combine the fractions.

$$ d(P, l) = \sqrt{\left(\frac{-ab - a^2x_P + ay_P}{a^2 + 1}\right)^2 + \left(\frac{b - y_P + ax_P}{a^2 + 1}\right)^2} $$

Then, wrap the powers around the numerator and denominator instead of the whole fraction, since $ (\frac{a}{b})^2 = \frac{a^2}{b^2} $, and combine the fractions.

$$ d(P, l) = \sqrt{\frac{(-ab - a^2x_P + ay_P)^2}{(a^2 + 1)^2} + \frac{(b - y_P + ax_P)^2}{(a^2 + 1)^2}} $$

$$ d(P, l) = \sqrt{\frac{(-ab - a^2x_P + ay_P)^2 + (b - y_P + ax_P)^2}{(a^2 + 1)^2}} $$

Factor out a $ -a $ from the first square.

$$ d(P, l) = \sqrt{\frac{\bigg(-a(b + ax_P - y_P)\bigg)^2 + (b - y_P + ax_P)^2}{(a^2 + 1)^2}} $$

Wrap the power around each factor, since $ (ab)^2 = a^2 \* b^2 $.

$$ d(P, l) = \sqrt{\frac{a^2 \* (b + ax_P - y_P)^2 + 1 \* (b - y_P + ax_P)^2}{(a^2 + 1)^2}} $$

Now factor out $ (b + ax_P - y_P)^2 $.

$$ d(P, l) = \sqrt{\frac{(a^2 + 1)(b + ax_P - y_P)^2}{(a^2 + 1)^2}} $$

Wrap the square root around each factor, just like the powers earlier.

$$ d(P, l) = \frac{\sqrt{(a^2 + 1)} \* \sqrt{(b + ax_P - y_P)^2}}{\sqrt{(a^2 + 1)^2}} $$

Remark that $ \sqrt{x^2} = | x | $. But since $ a^2 + 1 $ is always positive, no absolute value signs are required there.

$$ d(P, l) = \frac{\sqrt{(a^2 + 1)} \* | b + ax_P - y_P |}{a^2 + 1} $$

Next, remark that $ \frac{\sqrt{a}}{a} = \frac{1}{\sqrt{a}} $.

$$ d(P, l) = \frac{| b + ax_P - y_P |}{\sqrt{a^2 + 1}} $$

Finally, reorder the terms.

$$ d(P, l) = \frac{| ax_P - y_P + b |}{\sqrt{a^2 + 1}} $$
