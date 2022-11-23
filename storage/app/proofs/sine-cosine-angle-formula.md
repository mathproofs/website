---
title: Angle sum/difference formula for sine and cosine
description: This proof shows the formula for adding and subtracting angles for sine and cosine.
category: algebra
---

## Statement

When adding or subtracting angles in sine or cosine, these formulae apply for $ \alpha, \beta \in \R $:

$$ \sin(\alpha + \beta) = \sin(\alpha) \cos(\beta) + \cos(\alpha) \sin(\beta) $$

$$ \sin(\alpha - \beta) = \sin(\alpha) \cos(\beta) - \cos(\alpha) \sin(\beta) $$

$$ \cos(\alpha + \beta) = \cos(\alpha) \cos(\beta) - \sin(\alpha) \sin(\beta) $$

$$ \cos(\alpha - \beta) = \cos(\alpha) \cos(\beta) + \sin(\alpha) \sin(\beta) $$

## Proof

Use Euler's formula:

$$ e^{\theta i} = \cos(\theta) + i\sin(\theta) $$

When substituting $ \alpha + \beta $ for $ \theta $, you get:

$$ e^{(\alpha + \beta)i} = \cos(\alpha + \beta) + i\sin(\alpha + \beta) $$

Now, take $ e^{(\alpha + \beta)i} $ again and expand the brackets. Use that $ i^2 = -1 $.

$$
\begin{aligned}
e^{(\alpha + \beta)i} &= e^{\alpha i + \beta i} \newline
&= e^{\alpha i} \cdot e^{\beta i} \newline
&= \bigg(\cos(\alpha) + i\sin(\alpha)\bigg) \cdot \bigg(\cos(\beta) + i\sin(\beta)\bigg) \newline
&= \cos(\alpha) \cos(\beta) + i \cos(\alpha) \sin(\beta) + i \sin(\alpha) \cos(\beta) - \sin(\alpha) \sin(\beta) \newline
&= \cos(\alpha) \cos(\beta) - \sin(\alpha) \sin(\beta) + i \bigg(\cos(\alpha) \sin(\beta) + \sin(\alpha) \cos(\beta)\bigg)
\end{aligned}
$$

Since both expressions are equal to $ e^{(\alpha + \beta)i} $, set them equal to eachother:

$$ \cos(\alpha + \beta) + i \sin(\alpha + \beta) = \cos(\alpha) \cos(\beta) - \sin(\alpha) \sin(\beta) + i \bigg(\cos(\alpha) \sin(\beta) + \sin(\alpha) \cos(\beta)\bigg) $$

Since sine and cosine give a real value for a real input, the real parts and imaginary parts must match, giving:

$$ \cos(\alpha + \beta) = \cos(\alpha) \cos(\beta) - \sin(\alpha) \sin(\beta) $$

$$ \sin(\alpha + \beta) = \cos(\alpha) \sin(\beta) + \sin(\alpha) \cos(\beta) $$

When substituting $ - \beta $ for $ \beta $, use that $ \sin(-\theta) = -\sin(\theta) $ and $ \cos(-\theta) = \cos(\theta) $:

$$ \cos(\alpha - \beta) = \cos(\alpha) \cos(- \beta) - \sin(\alpha) \sin(-\beta) = \cos(\alpha) \cos(\beta) + \sin(\alpha) \sin(\beta) $$

$$ \sin(\alpha - \beta) = \cos(\alpha) \sin(- \beta) + \sin(\alpha) \cos(- \beta) = \sin(\alpha) \cos(\beta) - \cos(\alpha) \sin(\beta) $$
