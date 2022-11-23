---
title: Trig values of 36 degrees
description: This proof shows the exact value of sin(36), cos(36) and tan(36)
category: geometry
foundations: [tangent-sine-divided-by-cosine, trig-values-18-degrees, sine-cosine-angle-formula]
---

## Statement

The exact value of the trigonometry functions of $ 36 \degree $ are:

$$ \sin(36 \degree) = \tfrac{1}{4} \sqrt{10 - 2\sqrt5} $$

$$ \cos(36 \degree) = \tfrac{1}{4} \sqrt{6 + 2\sqrt5} $$

$$ \tan(36 \degree) = \sqrt{5 - 2\sqrt5} $$

## Sine

Use [the sum of angles formula for sine](/proofs/sine-cosine-angle-formula):

$$ \sin(\alpha + \beta) = \sin(\alpha) \cos(\beta) + \cos(\alpha) \sin(\beta) $$

When substituting $ 18 \degree $ for $ \alpha $ and $ \beta $, you get:

$$ \sin(36 \degree) = \sin(18 \degree + 18 \degree) = \sin(18 \degree) \cos(18 \degree) + \cos(18 \degree) \sin(18 \degree) = 2 \sin(18 \degree) \cos(18 \degree) $$

Recall [the exact trigonometry values of $ 18 \degree $](/proofs/trig-values-18-degrees):

$$ \sin(18 \degree) = \tfrac{1}{4} \sqrt{6 - 2\sqrt5} $$

$$ \cos(18 \degree) = \tfrac{1}{4} \sqrt{10 + 2\sqrt5} $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\sin(36 \degree) &= 2 \sin(18 \degree) \cos(18 \degree) \newline
&= 2 * \tfrac{1}{4} \sqrt{6 - 2\sqrt5} * \tfrac{1}{4} \sqrt{10 + 2\sqrt5} \newline
&= \tfrac{1}{8} \sqrt{(6 - 2\sqrt5)(10 + 2\sqrt5)} \newline
&= \tfrac{1}{8} \sqrt{60 + 12\sqrt5 - 20\sqrt5 - 20} \newline
&= \tfrac{1}{8} \sqrt{40 - 8\sqrt5} \newline
&= \tfrac{1}{8} \sqrt{4(10 - 2\sqrt5)} \newline
&= \tfrac{1}{4} \sqrt{10 - 2\sqrt5}
\end{aligned}
$$

## Cosine

Use [the sum of angles formula for cosine](/proofs/sine-cosine-angle-formula):

$$ \cos(\alpha + \beta) = \cos(\alpha) \cos(\beta) - \sin(\alpha) \sin(\beta) $$

When substituting $ 18 \degree $ for $ \alpha $ and $ \beta $, you get:

$$ \cos(36 \degree) = \cos(18 \degree + 18 \degree) = \cos(18 \degree) \cos(18 \degree) - \sin(18 \degree) \sin(18 \degree) = \cos(18 \degree)^2 - \sin(18 \degree)^2 $$

Recall [the exact trigonometry values of $ 18 \degree $](/proofs/trig-values-18-degrees):

$$ \sin(18 \degree) = \tfrac{1}{4} \sqrt{6 - 2\sqrt5} $$

$$ \cos(18 \degree) = \tfrac{1}{4} \sqrt{10 + 2\sqrt5} $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\cos(36 \degree) &= \cos(18 \degree)^2 - \sin(18 \degree)^2 \newline
&= \left(\tfrac{1}{4} \sqrt{10 + 2\sqrt5}\right)^2 - \left(\tfrac{1}{4} \sqrt{6 - 2\sqrt5}\right)^2 \newline
&= \tfrac{1}{16} \left(10 + 2\sqrt5 \right) - \tfrac{1}{16} \left(6 - 2\sqrt5 \right) \newline
&= \tfrac{10}{16} + \tfrac{2}{16} \sqrt5 - \tfrac{6}{16} + \tfrac{2}{16} \sqrt5 \newline
&= \tfrac{1}{4} + \tfrac{1}{4} \sqrt5 \newline
&= \tfrac{1}{4} \left(1 + \sqrt5 \right) \newline
&= \tfrac{1}{4} \sqrt{\left(1 + \sqrt5 \right)^2} \newline
&= \tfrac{1}{4} \sqrt{6 + 2\sqrt5}
\end{aligned}
$$

## Tangent

Use that [tangent is sine divided by cosine](/proofs/tangent-sine-divided-by-cosine) and simplify.

$$
\begin{aligned}
\tan(36 \degree) &= \frac{\sin(36 \degree)}{\cos(36 \degree)} \newline
&= \frac{\tfrac{1}{4} \sqrt{10 - 2\sqrt5}}{\tfrac{1}{4} \sqrt{6 + 2\sqrt5}} \newline
&= \sqrt{\frac{10 - 2\sqrt5}{6 + 2\sqrt5}} \newline
&= \sqrt{\frac{10 - 2\sqrt5}{6 + 2\sqrt5} * \frac{6 - 2\sqrt5}{6 - 2\sqrt5}} \newline
&= \sqrt{\frac{60 - 20\sqrt5 - 12\sqrt5 + 20}{36 - 20}} \newline
&= \sqrt{\frac{80 - 32\sqrt5}{16}} \newline
&= \sqrt{\frac{16 \left(5 - 2\sqrt5 \right)}{16}} \newline
&= \sqrt{5 - 2\sqrt5}
\end{aligned}
$$
