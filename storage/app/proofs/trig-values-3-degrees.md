---
title: Trig values of 3 degrees
description: This proof shows the exact value of sin(3), cos(3) and tan(3).
category: geometry
foundations:
    [
        tangent-sine-divided-by-cosine,
        trig-values-15-degrees,
        trig-values-18-degrees,
        sine-cosine-angle-formula
    ]
---

## Statement

The exact value of the trigonometry functions of $ 3 \degree $ are:

$$ \sin(3 \degree) = \tfrac14 \sqrt{8 - \sqrt3 - \sqrt{15} - \sqrt{10 - 2\sqrt5}} $$

$$ \cos(3 \degree) = \tfrac14 \sqrt{8 + \sqrt3 + \sqrt{15} + \sqrt{10 - 2\sqrt5}} $$

$$ \tan(3 \degree) = \sqrt{\frac{8 - \sqrt3 - \sqrt{15} - \sqrt{10 - 2\sqrt5}}{8 + \sqrt3 + \sqrt{15} + \sqrt{10 - 2\sqrt5}}} $$

## Sine

Use [the difference of angles formula for cosine](/proofs/sine-cosine-angle-formula):

$$ \sin(\alpha - \beta) = \sin(\alpha) \cos(\beta) - \sin(\beta) \cos(\alpha) $$

When substituting $ 18 \degree $ for $ \alpha $ and $ 15 \degree $ for $ \beta $, you get:

$$ \sin(3 \degree) = \sin(18 \degree - 15 \degree) = \sin(18 \degree) \cos(15 \degree) - \sin(15 \degree) \cos(18 \degree) $$

Recall [the exact trig values of $ 18 \degree $](/proofs/trig-values-18-degrees) and [the exact trig values of $ 15 \degree $](/proofs/trig-values-15-degrees):

$$ \sin(18 \degree) = \tfrac14 \sqrt{6 - 2\sqrt5} $$

$$ \cos(18 \degree) = \tfrac14 \sqrt{10 + 2\sqrt5} $$

$$ \sin(15 \degree) = \tfrac14 \sqrt{8 - 4\sqrt3} $$

$$ \cos(15 \degree) = \tfrac14 \sqrt{8 + 4\sqrt3} $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\sin(3 \degree) &= \sin(18 \degree) \cos(15 \degree) - \cos(18 \degree) \sin(15 \degree) \newline
&= \tfrac14 \sqrt{6 - 2\sqrt5} \cdot \tfrac14 \sqrt{8 + 4\sqrt3} - \tfrac14 \sqrt{10 + 2\sqrt5} \cdot \tfrac14 \sqrt{8 - 4\sqrt3} \newline
&= \tfrac{1}{16} \sqrt{\left(6 - 2\sqrt5\right)\left(8 + 4\sqrt3\right)} - \tfrac{1}{16} \sqrt{\left(10 + 2\sqrt5\right)\left(8 - 4\sqrt3\right)} \newline
&= \tfrac{1}{16} \sqrt{48 + 24\sqrt3 - 16\sqrt5 - 8\sqrt{15}} - \tfrac{1}{16} \sqrt{80 - 40\sqrt3 + 16\sqrt5 - 8\sqrt{15}} \newline
&= \tfrac18 \sqrt{12 + 6\sqrt3 - 4\sqrt5 - 2\sqrt{15}} - \tfrac18 \sqrt{20 - 10\sqrt3 + 4\sqrt5 - 2\sqrt{15}} \newline
&= \tfrac18 \left(\sqrt{12 + 6\sqrt3 - 4\sqrt5 - 2\sqrt{15}} - \sqrt{20 - 10\sqrt3 + 4\sqrt5 - 2\sqrt{15}}\right) \newline
&= \tfrac18 \sqrt{\left(\sqrt{12 + 6\sqrt3 - 4\sqrt5 - 2\sqrt{15}} - \sqrt{20 - 10\sqrt3 + 4\sqrt5 - 2\sqrt{15}}\right)^2} \newline
&= \tfrac18 \sqrt{12 + 6\sqrt3 - 4\sqrt5 - 2\sqrt{15} + 20 - 10\sqrt3 + 4\sqrt5 - 2\sqrt{15} - 2\sqrt{\left(12 + 6\sqrt3 - 4\sqrt5 - 2\sqrt{15}\right)\left(20 - 10\sqrt3 + 4\sqrt5 - 2\sqrt{15}\right)}} \newline
&= \tfrac18 \sqrt{32 - 4\sqrt3 - 4\sqrt{15} - 2\sqrt{240 - 120\sqrt3 + 48\sqrt5 - 24\sqrt{15} + 120\sqrt3 - 180 + 24\sqrt{15} - 36\sqrt5 - 80\sqrt5 + 40\sqrt{15} - 80 + 40\sqrt3 - 40\sqrt{15} + 60\sqrt5 - 40\sqrt3 + 60}} \newline
&= \tfrac18 \sqrt{32 - 4\sqrt3 - 4\sqrt{15} - 2\sqrt{40 - 8\sqrt5}} \newline
&= \tfrac18 \sqrt{32 - 4\sqrt3 - 4\sqrt{15} - 4\sqrt{10 - 2\sqrt5}} \newline
&= \tfrac14 \sqrt{8 - \sqrt3 - \sqrt{15} - \sqrt{10 - 2\sqrt5}}
\end{aligned}
$$

## Cosine

Use [the difference of angles formula for cosine](/proofs/sine-cosine-angle-formula):

$$ \cos(\alpha - \beta) = \cos(\alpha) \cos(\beta) + \sin(\alpha) \sin(\beta) $$

When substituting $ 18 \degree $ for $ \alpha $ and $ 15 \degree $ for $ \beta $, you get:

$$ \cos(3 \degree) = \cos(18 \degree - 15 \degree) = \cos(18 \degree) \cos(15 \degree) + \sin(18 \degree) \sin(15 \degree) $$

Recall [the exact trig values of $ 18 \degree $](/proofs/trig-values-18-degrees) and [the exact trig values of $ 15 \degree $](/proofs/trig-values-15-degrees):

$$ \sin(18 \degree) = \tfrac14 \sqrt{6 - 2\sqrt5} $$

$$ \cos(18 \degree) = \tfrac14 \sqrt{10 + 2\sqrt5} $$

$$ \sin(15 \degree) = \tfrac14 \sqrt{8 - 4\sqrt3} $$

$$ \cos(15 \degree) = \tfrac14 \sqrt{8 + 4\sqrt3} $$

Now substitute these values, and simplify:

$$
\begin{aligned}
\cos(3 \degree) &= \cos(18 \degree) \cos(15 \degree) + \sin(18 \degree) \sin(15 \degree) \newline
&= \tfrac14 \sqrt{10 + 2\sqrt5} \cdot \tfrac14 \sqrt{8 + 4\sqrt3} + \tfrac14 \sqrt{6 - 2\sqrt5} \cdot \tfrac14 \sqrt{8 - 4\sqrt3} \newline
&= \tfrac{1}{16} \sqrt{\left(10 + 2\sqrt5\right)\left(8 + 4\sqrt3\right)} + \tfrac{1}{16} \sqrt{\left(6 - 2\sqrt5\right)\left(8 - 4\sqrt3\right)} \newline
&= \tfrac{1}{16} \sqrt{80 + 40\sqrt3 + 16\sqrt5 + 8\sqrt{15}} + \tfrac{1}{16} \sqrt{48 - 24\sqrt3 - 16\sqrt5 + 8\sqrt{15}} \newline
&= \tfrac{1}{8} \sqrt{20 + 10\sqrt3 + 4\sqrt5 + 2\sqrt{15}} + \tfrac{1}{8} \sqrt{12 - 6\sqrt3 - 4\sqrt5 + 2\sqrt{15}} \newline
&= \tfrac{1}{8} \left(\sqrt{20 + 10\sqrt3 + 4\sqrt5 + 2\sqrt{15}} + \sqrt{12 - 6\sqrt3 - 4\sqrt5 + 2\sqrt{15}}\right) \newline
&= \tfrac{1}{8} \sqrt{\left(\sqrt{20 + 10\sqrt3 + 4\sqrt5 + 2\sqrt{15}} + \sqrt{12 - 6\sqrt3 - 4\sqrt5 + 2\sqrt{15}}\right)^2} \newline
&= \tfrac{1}{8} \sqrt{20 + 10\sqrt3 + 4\sqrt5 + 2\sqrt{15} + 12 - 6\sqrt3 - 4\sqrt5 + 2\sqrt{15} + 2\sqrt{\left(20 + 10\sqrt3 + 4\sqrt5 + 2\sqrt{15}\right)\left(12 - 6\sqrt3 - 4\sqrt5 + 2\sqrt{15}\right)}} \newline
&= \tfrac{1}{8} \sqrt{32 + 4\sqrt3 + 4\sqrt{15} + 2\sqrt{240 - 120\sqrt3 - 80\sqrt5 + 40\sqrt{15} + 120\sqrt3 - 180 - 40\sqrt{15} + 60\sqrt5 + 48\sqrt5 - 24\sqrt{15} - 80 + 40\sqrt3 + 24\sqrt{15} - 36\sqrt5 - 40\sqrt3 + 60}} \newline
&= \tfrac{1}{8} \sqrt{32 + 4\sqrt3 + 4\sqrt{15} + 2\sqrt{40 - 8\sqrt5}} \newline
&= \tfrac{1}{8} \sqrt{32 + 4\sqrt3 + 4\sqrt{15} + 4\sqrt{10 - 2\sqrt5}} \newline
&= \tfrac{1}{4} \sqrt{8 + \sqrt3 + \sqrt{15} + \sqrt{10 - 2\sqrt5}} \newline
\end{aligned}
$$

## Tangent

Use that [tangent is sine divided by cosine](/proofs/tangent-sine-divided-by-cosine) and simplify.

$$
\begin{aligned}
\tan(3 \degree) &= \frac{\sin(3 \degree)}{\cos(3 \degree)} \newline
&= \frac{\tfrac14 \sqrt{8 - \sqrt3 - \sqrt{15} - \sqrt{10 - 2\sqrt5}}}{\tfrac14 \sqrt{8 + \sqrt3 + \sqrt{15} + \sqrt{10 - 2\sqrt5}}} \newline
&= \sqrt{\frac{8 - \sqrt3 - \sqrt{15} - \sqrt{10 - 2\sqrt5}}{8 + \sqrt3 + \sqrt{15} + \sqrt{10 - 2\sqrt5}}}
\end{aligned}
$$
