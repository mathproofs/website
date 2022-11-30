---
title: The limit of sin(x) over x
description: This proof shows that the limit as x goes to zero of sin(x) over x converges to one.
category: geometry
foundations: [tangent-sine-divided-by-cosine]
---

## Statement

The limit as $ \theta $ goes to $ 0 $ of $ \sin(\theta) \div \theta $ converges to $ 1 $, for radians:

$$ \lim\_{\theta \to 0} \left(\frac{\sin(\theta)}{\theta}\right) = 1 $$

## Proof

Use the unit circle with radius $ 1 $ and draw a triangle $ OAB $ inside it, with angle $ \theta $. Then draw the line $ CD $ perpendicular to the cirlce and the $ x $-axis, like the image below:

![](/proofs/limit-sinx-over-x.svg)

Since $ OB = OC = 1 $, we can find the values of $ AB $, $ OA $ and $ CD $:

$$ \sin(\theta) = \frac{AB}{OB} = AB $$

$$ \cos(\theta) = \frac{OA}{OB} = OA $$

$$ \tan(\theta) = \frac{CD}{OC} = CD $$

Note that the area of the unit circle is $ π \cdot 1^2 = π $. From this follows that the area of circle segment $ OBC $ is $ π \cdot \frac{\theta}{2π} = \frac{1}{2} \theta $, when $ \theta $ is in radians.

Next, find the areas of $ \triangle OAB $ and $ \triangle OCD $.

$$ A\_{\triangle OAB} = \tfrac{1}{2} \cdot OA \cdot AB = \tfrac{1}{2}\sin(\theta)\cos(\theta) $$

$$ A\_{\triangle OCD} = \tfrac{1}{2} \cdot OC \cdot CD = \tfrac{1}{2}\tan(\theta) $$

Now note the following inequality:

$$ A\_{\triangle OAB} \le A\_{OBC} \le A\_{\triangle OCD} $$

Substitute these values and multiply each side by $ 2 $. Note that [tangent is sine divided by cosine](/proofs/tangent-sine-divided-by-cosine).

$$ \tfrac{1}{2}\sin(\theta)\cos(\theta) \le \tfrac{1}{2}\theta \le \tfrac{1}{2}\tan(\theta) $$

$$ \sin(\theta)\cos(\theta) \le \theta \le \tan(\theta) = \frac{\sin(\theta)}{\cos(\theta)} $$

Divide each side by $ \sin(\theta) $. Since $ \sin(\theta) $ is positive for a small and positive $ \theta $, the inequality sign stays as is.

$$ \cos(\theta) \le \frac{\theta}{\sin(\theta)} \le \frac{1}{\cos(\theta)} $$

Flip each fraction. This reverses the inequality sign.

$$ \frac{1}{\cos(\theta)} \ge \frac{\sin(\theta)}{\theta} \ge \cos(\theta) $$

Now take the limit as $ \theta $ approached $ 0 $ on each side.

$$ \lim\_{\theta \to 0} \left(\frac{1}{\cos(\theta)}\right) \ge \lim\_{\theta \to 0} \left(\frac{\sin(\theta)}{\theta}\right) \ge \lim\_{\theta \to 0} \bigg(\cos(\theta)\bigg) $$

Since $ \cos(0) = 1 $, the first and third limit can be evaluated.

$$ 1 \ge \lim\_{\theta \to 0} \left(\frac{\sin(\theta)}{\theta}\right) \ge 1 $$

From this follows:

$$ \lim\_{\theta \to 0} \left(\frac{\sin(\theta)}{\theta}\right) = 1 $$
