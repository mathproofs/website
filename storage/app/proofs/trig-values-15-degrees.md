---
title: Trig values of 15 degrees
description: This proof shows the exact value of sin(15), cos(15) and tan(15)
category: geometry
foundations:
    [
        tangent-sine-divided-by-cosine,
        trig-values-45-degrees,
        trig-values-30-60-degrees,
        sine-cosine-angle-formula
    ]
---

## Statement

The exact value of the trigonometry functions of $ 15 \degree $ are:

$$ \sin(15 \degree) = \tfrac{1}{4} \sqrt{8 - 4\sqrt3} $$

$$ \cos(15 \degree) = \tfrac{1}{4} \sqrt{8 + 4\sqrt3} $$

$$ \tan(15 \degree) = \sqrt{7 - 4\sqrt3} $$

## Sine

Use [the difference of angles formula for sine](/proofs/sine-cosine-angle-formula):

$$ \sin(\alpha - \beta) = \sin(\alpha) \cos(\beta) - \sin(\beta) \cos(\alpha) $$

When substituting $ 45 \degree $ for $ \alpha $ and $ 30 \degree $ for $ \beta $, you get:

$$ \sin(15 \degree) = \sin(45 \degree - 30 \degree) = \sin(45 \degree) \cos(30 \degree) - \sin(30 \degree) \cos(45 \degree) $$

Recall [the exact trig values of $ 30 \degree $](/proofs/trig-values-30-60-degrees) and [the exact trig values of $ 45 \degree $](/proofs/trig-values-45-degrees):

$$ \sin(30 \degree) = \tfrac{1}{2} $$

$$ \cos(30 \degree) = \tfrac{1}{2} \sqrt3 $$

$$ \sin(45 \degree) = \tfrac{1}{2} \sqrt2 $$

$$ \cos(45 \degree) = \tfrac{1}{2} \sqrt2 $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\sin(15 \degree) &= \sin(45 \degree) \cos(30 \degree) - \sin(30 \degree) \cos(45 \degree) \newline
&= \tfrac12 \sqrt2 \cdot \tfrac12 \sqrt3 - \tfrac12 \cdot \tfrac12 \sqrt2 \newline
&= \tfrac14 \sqrt6 - \tfrac14 \sqrt2 \newline
&= \tfrac14 \sqrt{\left(\sqrt6 - \sqrt2\right)^2} \newline
&= \tfrac14 \sqrt{6 - 2\sqrt{12} + 2} \newline
&= \tfrac14 \sqrt{8 - 4\sqrt3}
\end{aligned}
$$

## Cosine

Use [the difference of angles formula for cosine](/proofs/sine-cosine-angle-formula):

$$ \cos(\alpha - \beta) = \cos(\alpha) \cos(\beta) + \sin(\alpha) \sin(\beta) $$

When substituting $ 45 \degree $ for $ \alpha $ and $ 30 \degree $ for $ \beta $, you get:

$$ \cos(15 \degree) = \cos(45 \degree - 30 \degree) = \cos(45 \degree) \cos(30 \degree) + \sin(45 \degree) \sin(30 \degree) $$

Recall [the exact trig values of $ 30 \degree $](/proofs/trig-values-30-60-degrees) and [the exact trig values of $ 45 \degree $](/proofs/trig-values-45-degrees):

$$ \sin(30 \degree) = \tfrac{1}{2} $$

$$ \cos(30 \degree) = \tfrac{1}{2} \sqrt3 $$

$$ \sin(45 \degree) = \tfrac{1}{2} \sqrt2 $$

$$ \cos(45 \degree) = \tfrac{1}{2} \sqrt2 $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\cos(15 \degree) &= \cos(45 \degree) \cos(30 \degree) + \sin(45 \degree) \sin(30 \degree) \newline
&= \tfrac12 \sqrt2 \cdot \tfrac12 \sqrt3 + \tfrac12 \sqrt2 \cdot \tfrac12 \newline
&= \tfrac14 \sqrt6 + \tfrac14 \sqrt2 \newline
&= \tfrac14 \sqrt{\left(\sqrt6 + \sqrt2\right)^2} \newline
&= \tfrac14 \sqrt{6 + 2\sqrt{12} + 2} \newline
&= \tfrac14 \sqrt{8 + 4\sqrt3}
\end{aligned}
$$

## Tangent

Use that [tangent is sine divided by cosine](/proofs/tangent-sine-divided-by-cosine) and simplify.

$$
\begin{aligned}
\tan(15 \degree) &= \frac{\sin(15 \degree)}{\cos(15 \degree)} \newline
&= \frac{\tfrac14 \sqrt{8 - 4\sqrt3}}{\tfrac14 \sqrt{8 + 4\sqrt3}} \newline
&= \sqrt{\frac{8 - 4\sqrt3}{8 + 4\sqrt3}} \newline
&= \sqrt{\frac{8 - 4\sqrt3}{8 + 4\sqrt3} \cdot \frac{8 - 4\sqrt3}{8 - 4\sqrt3}} \newline
&= \sqrt{\frac{64 - 64\sqrt3 + 48}{64 - 48}} \newline
&= \sqrt{\frac{16(4 - 4\sqrt3 + 3)}{16}} \newline
&= \sqrt{7 - 4\sqrt3} \newline
\end{aligned}
$$
