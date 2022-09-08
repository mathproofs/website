---
title: Quadratic formula
description: This proof shows how the famous quadratic formula works.
category: algebra
---

## Statement

Given the equation:

$$ ax^2 + bx + c = 0 $$

The values of $ x $ can be found using this formula:

$$ x = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a} $$

## Proof

Take the standard quadratic equation.

$$ ax^2 + bx + c = 0 $$

Divide every term by $ a $.

$$ x^2 + \frac{b}{a}x + \frac{c}{a} = 0 $$

Complete the square by adding and subtracting $ \left(\frac{b}{2a}\right)^2 $.

$$ x^2 + \frac{b}{a}x + \left(\frac{b}{2a}\right)^2 - \left(\frac{b}{2a}\right)^2 + \frac{c}{a} = 0 $$

$$ \left(x + \frac{b}{2a}\right)^2 - \left(\frac{b}{2a}\right)^2 + \frac{c}{a} = 0 $$

Isolate the square.

$$ \left(x + \frac{b}{2a}\right)^2 = \left(\frac{b}{2a}\right)^2 - \frac{c}{a} $$

Expand the brackets on the right hand side and combine the fractions.

$$ \left(x + \frac{b}{2a}\right)^2 = \frac{b^2}{4a^2} - \frac{4ac}{4a^2} $$

$$ \left(x + \frac{b}{2a}\right)^2 = \frac{b^2 - 4ac}{4a^2} $$

Take the square root on both sides. Note that this will result in a $ \pm $-sign on the right hand side.

$$ x + \frac{b}{2a} = \pm \sqrt{\frac{b^2 - 4ac}{4a^2}} $$

Now isolate the $ x $-term.

$$ x = - \frac{b}{2a} \pm \sqrt{\frac{b^2 - 4ac}{4a^2}} $$

Finally, simplify the result.

$$ x = \frac{-b}{2a} \pm \frac{\sqrt{b^2 - 4ac}}{\sqrt{4a^2}} $$

$$ x = \frac{-b}{2a} \pm \frac{\sqrt{b^2 - 4ac}}{2a} $$

$$ x = \frac{-b \pm \sqrt{b^2 - 4ac}}{2a} $$
