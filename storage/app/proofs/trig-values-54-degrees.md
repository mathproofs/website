---
title: Trig values of 54 degrees
description: This proof shows the exact value of sin(54), cos(54) and tan(54)
category: geometry
foundations: [tangent-sine-divided-by-cosine, trig-values-18-degrees, trig-values-36-degrees]
---

## Statement

The exact value of the trigonometry functions of $ 54 \degree $ are:

$$ \sin(54 \degree) = \tfrac14 \sqrt{6 + 2\sqrt5} $$

$$ \cos(54 \degree) = \tfrac14 \sqrt{10 - 2\sqrt5} $$

$$ \tan(54 \degree) = \tfrac15 \sqrt{25 + 10\sqrt5} $$

## Sine

Use the sum of angles formula for sine:

$$ \sin(\alpha + \beta) = \sin(\alpha) \cos(\beta) + \cos(\alpha) \sin(\beta) $$

When substituting $ 18 \degree $ for $ \alpha $ and $ 36 \degree $ for $ \beta $, you get:

$$ \sin(54 \degree) = \sin(18 \degree + 36 \degree) = \sin(18 \degree) \cos(36 \degree) + \cos(18 \degree) \sin(36 \degree) $$

Recall [the exact trig values of $ 18 \degree $](/proofs/trig-values-18-degrees) and [the exact trig values of $ 36 \degree $](/proofs/trig-values-36-degrees):

$$ \sin(18 \degree) = \tfrac14 \sqrt{6 - 2\sqrt5} $$

$$ \cos(18 \degree) = \tfrac14 \sqrt{10 + 2\sqrt5} $$

$$ \sin(36 \degree) = \tfrac14 \sqrt{10 - 2\sqrt5} $$

$$ \cos(36 \degree) = \tfrac14 \sqrt{6 + 2\sqrt5} $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\sin(54 \degree) &= \cos(36 \degree) \sin(18 \degree) + \sin(36 \degree) \cos(18 \degree) \newline
&= \tfrac14 \sqrt{6 + 2\sqrt5} \cdot \tfrac14 \sqrt{6 - 2\sqrt5} + \tfrac14 \sqrt{10 - 2\sqrt5} \cdot \tfrac14 \sqrt{10 + 2\sqrt5} \newline
&= \tfrac{1}{16} \sqrt{\left(6 + 2\sqrt5\right)\left(6 - 2\sqrt5\right)} + \tfrac{1}{16} \sqrt{\left(10 - 2\sqrt5\right)\left(10 + 2\sqrt5\right)} \newline
&= \tfrac{1}{16} \sqrt{36 - 20} + \tfrac{1}{16} \sqrt{100 - 20} \newline
&= \tfrac{1}{16} \sqrt{16} + \tfrac{1}{16} \sqrt{80} \newline
&= \tfrac14 + \tfrac14 \sqrt5 \newline
&= \tfrac14 \left(\sqrt5 + 1\right) \newline
&= \tfrac14 \sqrt{\left(\sqrt5 + 1\right)^2} \newline
&= \tfrac14 \sqrt{6 + 2\sqrt5}
\end{aligned}
$$

## Cosine

Use the sum of angles formula for cosine:

$$ \cos(\alpha + \beta) = \cos(\alpha) \cos(\beta) - \sin(\alpha) \sin(\beta) $$

When substituting $ 36 \degree $ for $ \alpha $ and $ 18 \degree $ for $ \beta $, you get:

$$ \cos(54 \degree) = \cos(36 \degree + 18 \degree) = \cos(36 \degree) \cos(18 \degree) - \sin(36 \degree) \sin(18 \degree) $$

Recall [the exact trig values of $ 18 \degree $](/proofs/trig-values-18-degrees) and [the exact trig values of $ 36 \degree $](/proofs/trig-values-36-degrees):

$$ \sin(18 \degree) = \tfrac{1}{4} \sqrt{6 - 2\sqrt5} $$

$$ \cos(18 \degree) = \tfrac{1}{4} \sqrt{10 + 2\sqrt5} $$

$$ \sin(36 \degree) = \tfrac14 \sqrt{10 - 2\sqrt5} $$

$$ \cos(36 \degree) = \tfrac14 \sqrt{6 + 2\sqrt5} $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\cos(54 \degree) &= \cos(36 \degree) \cos(18 \degree) - \sin(36 \degree) \sin(18 \degree) \newline
&= \tfrac14 \sqrt{6 + 2\sqrt5} \cdot \tfrac14 \sqrt{10 + 2\sqrt5} - \tfrac14 \sqrt{10 - 2\sqrt5} \cdot \tfrac14 \sqrt{6 - 2\sqrt5} \newline
&= \tfrac{1}{16} \sqrt{\left(6 + 2\sqrt5\right)\left(10 + 2\sqrt5\right)} - \tfrac{1}{16} \sqrt{\left(10 - 2\sqrt5\right)\left(6 - 2\sqrt5\right)} \newline
&= \tfrac{1}{16} \sqrt{60 + 12\sqrt5 + 20\sqrt5 + 20} - \tfrac{1}{16} \sqrt{60 - 20\sqrt5 - 12\sqrt5 + 20} \newline
&= \tfrac{1}{16} \sqrt{80 + 32\sqrt5} - \tfrac{1}{16} \sqrt{80 - 32\sqrt5} \newline
&= \tfrac14 \sqrt{5 + 2\sqrt5} - \tfrac14 \sqrt{5 - 2\sqrt5} \newline
&= \tfrac14 \left(\sqrt{5 + 2\sqrt5} - \sqrt{5 - 2\sqrt5}\right) \newline
&= \tfrac14 \sqrt{\left(\sqrt{5 + 2\sqrt5} - \sqrt{5 - 2\sqrt5}\right)^2} \newline
&= \tfrac14 \sqrt{5 + 2\sqrt5 - 2\sqrt{\left(5 + 2\sqrt5\right)\left(5 - 2\sqrt5\right)} + 5 - 2\sqrt5} \newline
&= \tfrac14 \sqrt{10 - 2\sqrt{25 - 20}} \newline
&= \tfrac14 \sqrt{10 - 2\sqrt5}
\end{aligned}
$$

## Tangent

Use that [tangent is sine divided by cosine](/proofs/tangent-sine-divided-by-cosine) and simplify.

$$
\begin{aligned}
\tan(54 \degree) &= \frac{\sin(54 \degree)}{\cos(54 \degree)} \newline
&= \frac{\tfrac14 \sqrt{6 + 2\sqrt5}}{\tfrac14 \sqrt{10 - 2\sqrt5}} \newline
&= \sqrt{\frac{6 + 2\sqrt5}{10 - 2\sqrt5}} \newline
&= \sqrt{\frac{6 + 2\sqrt5}{10 - 2\sqrt5} \cdot \frac{10 + 2\sqrt5}{10 + 2\sqrt5}} \newline
&= \sqrt{\frac{60 + 12\sqrt5 + 20\sqrt5 + 20}{100 - 20}} \newline
&= \sqrt{\frac{80 + 32\sqrt5}{80}} \newline
&= \sqrt{\frac{5 + 2\sqrt5}{5}} \newline
&= \frac{\sqrt{5 + 2\sqrt5}}{\sqrt5} \newline
&= \tfrac15 \sqrt5 \cdot \sqrt{5 + 2\sqrt5} \newline
&= \tfrac15 \sqrt{25 + 10\sqrt5}
\end{aligned}
$$
