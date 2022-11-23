---
title: The cube root of a complex number
category: algebra
foundations: [quadratic-formula]
wip: true
---

Consider the cube root of a complex number, $ \sqrt[3]{a + bi} $. Now write this in the standard form: $ c + di $, so you get:

$$ \sqrt[3]{a + bi} = c + di $$

Cube both sides and expand the brackets.

$$
\begin{aligned}
a + bi &= (c + di)^3 \newline &= c^3 + 3c^2di + 3c(di)^2 + (di)^3 \newline &= c^3 + 3c^2di - 3cd^2 - d^3i \newline &= c^3 - 3cd^2 + i(3c^2d - d^3)
\end{aligned}
$$

Since $ a, b, c, d \in \R $, the real parts and the imaginary parts must match, so you get this systems of equations:

$$ a = c^3 - 3cd^2 $$

$$ b = 3c^2d - d^3 $$

From the first equation, isolate $ d^2 $:

$$ 3cd^2 = c^3 - a $$

$$ d^2 = \frac{c^3 - a}{3c} $$

From the second equation, divide every term by $ d $ and substitute $ d^2 $.

$$ 3c^2 - d^2 = \frac{b}{d} $$

$$ 3c^2 - \frac{c^3 - a}{3c} = \frac{b}{d} $$

Split the fraction and add like terms.

$$ 3c^2 - \frac{1}{3}c^2 + \frac{a}{3c} = \frac{b}{d} $$

$$ \frac{8}{3}c^2 + \frac{a}{3c} = \frac{b}{d} $$

Square both sides and expand the brackets.

$$ \left(\frac{8}{3}c^2 + \frac{a}{3c}\right)^2 = \left(\frac{b}{d}\right)^2 $$

$$ \frac{64}{9}c^4 + \frac{16}{9}ac + \frac{a^2}{9c^2} = \frac{b^2}{d^2} $$

Substitute $ d^2 $ and multiply both sides by $ c^2 $.

$$ \frac{64}{9}c^6 + \frac{16}{9}ac^3 + \frac{a^2}{9} = \frac{b^2c^2}{\frac{c^3 - a}{3c}} = \frac{3b^2c^3}{c^3 - a} $$

Multiply both sides by $ c^3 - a $.

$$ \left(\tfrac{64}{9}c^6 + \tfrac{16}{9}ac^3 + \tfrac{1}{9}a^2 \right)(c^3 - a) = 3b^2c^3 $$

$$ \tfrac{64}{9}c^9 + \tfrac{16}{9}ac^6 + \tfrac{1}{9}a^2c^3 - \tfrac{64}{9}ac^6 - \tfrac{16}{9}a^2c^3 - \tfrac{1}{9}a^3 - 3b^2c^3 = 0 $$

Factor out powers of $ c $.

$$ \tfrac{64}{9}c^9 + \left(\tfrac{16}{9}a - \tfrac{64}{9}a\right)c^6 + \left(\tfrac{1}{9}a^2 - \tfrac{16}{9}a^2 - 3b^2\right)c^3 - \tfrac{1}{9}a^3 = 0 $$

$$ \tfrac{64}{9}c^9 - \tfrac{48}{9}ac^6 + \left(- \tfrac{15}{9}a^2 - 3b^2\right)c^3 - \tfrac{1}{9}a^3 = 0 $$

Divide each term by $ \frac{64}{9} $, so multiply by $ 9 $ and divide by $ 64 $.

$$ c^9 - \tfrac{3}{4}ac^6 + \left(-\tfrac{15}{64}a^2 - \tfrac{27}{64}b^2\right)c^3 - \tfrac{1}{64}a^3 = 0 $$

Let $ c^3 = n + \tfrac{1}{4} a $ and expand the brackets.

$$ \left(n + \tfrac{1}{4}a\right)^3 - \tfrac{3}{4}a\left(n + \tfrac{1}{4}a\right)^2 + \left(-\tfrac{15}{64}a^2 - \tfrac{27}{64}b^2\right)\left(n + \tfrac{1}{4}a\right) - \tfrac{1}{64}a^3 = 0 $$

$$ \bigg(n^3 + 3n^2 \cdot \tfrac{1}{4}a + 3n \cdot \tfrac{1}{16}a^2 + \tfrac{1}{64}a^3 \bigg) - \tfrac{3}{4}a\bigg(n^2 + \tfrac{1}{2}an + \tfrac{1}{16}a^2\bigg) + \bigg(-\tfrac{15}{64}a^2n - \tfrac{15}{256}a^3 - \tfrac{27}{64}b^2n - \tfrac{27}{256}ab^2 \bigg) - \tfrac{1}{64}a^3 = 0 $$

$$ n^3 + \tfrac{3}{4}an^2 + \tfrac{3}{16}a^2n + \tfrac{1}{64}a^3 - \tfrac{3}{4}an^2 - \tfrac{1}{8}a^2n - \tfrac{3}{64}a^3 - \tfrac{15}{64}a^2n - \tfrac{15}{256}a^3 - \tfrac{27}{64}b^2n - \tfrac{27}{256}ab^2 - \tfrac{1}{64}a^3 = 0 $$

Group all terms by $ n $ and add like terms.

$$ n^3 + \bigg(\tfrac{3}{4}a - \tfrac{3}{4}a\bigg)n^2 + \bigg(\tfrac{3}{16}a^2 - \tfrac{3}{8}a^2 - \tfrac{15}{64}a^2 - \tfrac{27}{64}b^2\bigg)n + \bigg(\tfrac{1}{64}a^3 - \tfrac{3}{64}a^3 - \tfrac{15}{256}a^3 - \tfrac{27}{256}ab^2 - \tfrac{1}{64}a^3\bigg) = 0 $$

$$ n^3 + \bigg(-\tfrac{27}{64}a^2 - \tfrac{27}{64}b^2\bigg)n + \bigg(-\tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2\bigg) = 0 $$

Let $ n = u + v $ and $ -\tfrac{27}{64}a^2 - \tfrac{27}{64}b^2 = -3uv \implies v = \frac{\frac{27}{64}a^2 + \frac{27}{64}b^2}{3u} = \frac{\frac{9}{64}a^2 + \frac{9}{64}b^2}{u} $.

$$ (u + v)^3 - 3uv(u + v) - \tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2 = 0 $$

$$ u^3 + 3u^2v + 3uv^2 + v^3 - 3u^2v - 3uv^2 - \tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2 = 0 $$

$$ u^3 + v^3 - \tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2 = 0 $$

Substitute $ v $ and multiply both sides by $ u^3 $.

$$ u^3 + \left(\frac{\tfrac{9}{64}a^2 + \frac{9}{64}b^2}{u}\right)^3 - \tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2 = 0 $$

$$ u^3 + \frac{\left(\frac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}{u^3} - \tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2 = 0 $$

$$ u^6 + \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3 + \bigg(-\tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2\bigg)u^3 = 0 $$

$$ u^6 + \bigg(-\tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2\bigg)u^3 + \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3 = 0 $$

Use [the quadratic formula](/proofs/quadratic-formula) to solve for $ u^3 $.

$$ u^3 = \frac{-\left(-\tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2\right) \pm \sqrt{(-\tfrac{27}{256}a^3 - \tfrac{27}{256}ab^2)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}}{2} $$

$$ u^3 = \tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3} $$

Take the cube root on both sides to isolate $ u $.

$$ u = \sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}} $$

Now substitute $ u $ to solve for $ v $.

$$ v = \frac{\frac{9}{64}a^2 + \frac{9}{64}b^2}{u} = \frac{\frac{9}{64}a^2 + \frac{9}{64}b^2}{\sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}}} $$

Substiute $ u $ and $ v $ back into $ n $:

$$ n = u + v = \sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}} + \frac{\frac{9}{64}a^2 + \frac{9}{64}b^2}{\sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}}} $$

Finally, substitute $ n $ back into $ c $.

$$ c^3 = n + \tfrac{1}{4}a $$

$$ c = \sqrt[3]{\sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}} + \frac{\frac{9}{64}a^2 + \frac{9}{64}b^2}{\sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}}} + \tfrac{1}{4}a} $$

Or, shorter:

$$ c = \sqrt[3]{u + \frac{\frac{9}{64}a^2 + \frac{9}{64}b^2}{u} + \tfrac{1}{4}a}, \text{where } u = \sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}} $$

From $ d^2 = \frac{c^3 - a}{3c} $ follows that:

$$
\begin{aligned}
d &= \sqrt{\frac{c^3 - a}{3c}} \newline
&= \sqrt{\frac{u + v + \frac{1}{4}a - a}{3c}} \newline
&= \sqrt{\frac{u + v - \frac{3}{4}a}{3\sqrt[3]{u + \frac{\frac{9}{64}a^2 + \frac{9}{64}b^2}{u} + \tfrac{1}{4}a}}} \newline
&, \text{where } u = \sqrt[3]{\tfrac{1}{2}\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right) \pm \tfrac{1}{2} \sqrt{\left(\tfrac{27}{256}a^3 + \tfrac{27}{256}ab^2\right)^2 - 4 \left(\tfrac{9}{64}a^2 + \tfrac{9}{64}b^2\right)^3}}
\end{aligned}
$$
