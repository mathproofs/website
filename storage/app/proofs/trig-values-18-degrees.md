---
title: Trig values of 18 degrees
description: This proof shows the exact value of sin(18), cos(18) and tan(18)
category: geometry
foundations: [pythagorean-theorem, quadratic-formula]
---

## Statement

The exact value of the trigonometry functions of $ 18 \degree $ are:

$$ \sin(18 \degree) = \tfrac{1}{4} \sqrt{6 - 2 \sqrt{5}} $$

$$ \cos(18 \degree) = \tfrac{1}{4} \sqrt{10 + 2 \sqrt{5}} $$

$$ \tan(18 \degree) = \tfrac{1}{5} \sqrt{25 - 10 \sqrt{5}} $$

## Proof

Construct triangle $ ABC $ with $ \angle C = 36 \degree $ and $ \angle A = \angle B = 72 \degree $. Then construct a bisector from $ A $ to $ D $ on $ BC $, so that $ \angle A_1 = \angle A_2 = 36 \degree $. Finally construct altitude $ CE $ on $ AB $, so that $ \angle C_1 = \angle C_2 = 18 \degree $. See the image below.

![](/proofs/trig-values-18-degrees.svg)

Let $ AC = m $. Because triangle $ ABC $ is isosceles, $ BC = AC = m $.

Let $ AB = n $. Because triangle $ ABD $ is isosceles, $ AD = AB = n $. And because triangle $ ADC $ is isosceles as well, $ CD = AD = n $.

Note that $ BE = \frac{1}{2} AB = \frac{1}{2} n $ and $ BD = BC - CD = m - n $.

Now prove that triangle $ ABC $ is similar to triangle $ CAB $:

$$
\begin{rcases} \angle A_1 = \angle C = 36 \degree \newline \angle B = \angle A = 72 \degree \newline \angle D_1 = \angle B = 72 \degree \end{rcases} \triangle ABD \sim \triangle CAB
$$

From those sililar triangles, we get:

$$ \frac{BD}{AB} = \frac{AB}{AC} $$

$$ \frac{m - n}{n} = \frac{n}{m} $$

Now cross-multiply and divide each term by $ m^2 $.

$$ m(m - n) = n \* n $$

$$ m^2 - mn = n^2 $$

$$ n^2 + mn - m^2 = 0 $$

$$ \frac{n^2}{m^2} + \frac{n}{m} - 1 = 0 $$

$$ \left(\frac{n}{m}\right)^2 + \left(\frac{n}{m}\right) - 1 = 0 $$

Solve for $ \dfrac{n}{m} $ using the [quadratic formula](/proofs/quadratic-formula) (only positive values) and isolate $ n $.

$$ \frac{n}{m} = \frac{-1 + \sqrt{1^2 - 4(1)(-1)}}{2} = \frac{-1 + \sqrt{5}}{2} $$

$$ n = \tfrac{1}{2} m (\sqrt{5} - 1) $$

Write $ \sqrt{5} - 1 $ as one square root.

$$ n = \tfrac{1}{2} m \sqrt{(\sqrt{5} - 1)^2} = \tfrac{1}{2} m \sqrt{6 - 2 \sqrt{5}} $$

Find $ CE $ using the [Pythagorean theorem](/proofs/pythagorean-theorem).

$$
\begin{aligned}
CE &= \sqrt{BC^2 - BE^2} \newline
&= \sqrt{m^2 - (\tfrac{1}{2}n)^2} \newline
&= \sqrt{m^2 - \left(\tfrac{1}{4}m \sqrt{6 - 2\sqrt{5}}\right)^2} \newline
&= \sqrt{m^2 - \tfrac{1}{16} m^2 (6 - 2\sqrt{5})} \newline
&= \sqrt{\tfrac{16}{16} m^2 - \tfrac{6}{16} m^2 + \tfrac{2\sqrt{5}}{16} m^2} \newline
&= m \* \frac{\sqrt{16 - 6 + 2 \sqrt{5}}}{\sqrt{16}} \newline
&= \tfrac{1}{4} m \sqrt{10 + 2 \sqrt{5}}
\end{aligned}
$$

### Sine

From the triangle, note that $ \sin(\angle C_1) = \dfrac{BE}{BC} $, so:

$$ \sin(18 \degree) = \frac{\frac{1}{2}n}{m} = \frac{\frac{1}{2} \* \tfrac{1}{2} m \sqrt{6 - 2 \sqrt{5}}}{m} = \tfrac{1}{4} \sqrt{6 - 2 \sqrt{5}} $$

### Cosine

From the triangle, note that $ \cos(\angle C_1) = \dfrac{CE}{BC} $, so:

$$ \cos(18 \degree) = \frac{\tfrac{1}{4} m \sqrt{10 + 2 \sqrt{5}}}{m} = \tfrac{1}{4} \sqrt{10 + 2 \sqrt{5}} $$

### Tangent

From the triangle, note that $ \tan(\angle C_1) = \dfrac{BE}{CE} $, so:

$$
\begin{aligned}
\tan(18 \degree) &= \frac{\frac{1}{2}n}{\tfrac{1}{4} m \sqrt{10 + 2 \sqrt{5}}} \newline
&= \frac{\frac{1}{2} \* \tfrac{1}{2} m \sqrt{6 - 2 \sqrt{5}}}{\tfrac{1}{4} m \sqrt{10 + 2 \sqrt{5}}} \newline
&= \frac{\sqrt{6 - 2\sqrt5}}{\sqrt{10 + 2\sqrt5}} \newline
&= \sqrt{\frac{6 - 2\sqrt5}{10 + 2\sqrt5}} \newline
&= \sqrt{\frac{6 - 2\sqrt5}{10 + 2\sqrt5} * \frac{10 - 2\sqrt5}{10 - 2\sqrt5}} \newline
&= \sqrt{\frac{60 - 12\sqrt5 - 20\sqrt5 + 20}{100 - 20}} \newline
&= \sqrt{\frac{80 - 32\sqrt5}{80}} \newline
&= \sqrt{\frac{5 - 2\sqrt5}{5}} \newline
&= \frac{\sqrt{5 - 2\sqrt5}}{\sqrt5} \newline
&= \tfrac{1}{5} \sqrt5 \sqrt{5 - 2\sqrt5} \newline
&= \tfrac{1}{5} \sqrt{25 - 10\sqrt5}
\end{aligned}
$$
