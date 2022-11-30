---
title: Derivative of cos(x)
description: This proof shows what the derivative of cos(x) is.
category: calculus
foundations: [definition-of-derivative, sine-cosine-angle-formula, limit-sinx-over-x]
---

## Statement

The derivative of $ \cos(x) $ is:

$$ \tfrac{d}{dx}\big(\cos(x)\big) = -\sin(x) $$

## Proof

Take [the definition of the derivative](/proofs/definition-of-derivative):

$$ \tfrac{d}{dx}\big(\cos(x)\big) = \lim\_{h \to 0} \left(\frac{\cos(x + h) - \cos(x)}{h}\right) $$

Use [the angle sum formula for sine](/proofs/sine-cosine-angle-formula) to expand $ \cos(x + h) $:

$$ \tfrac{d}{dx}\big(\cos(x)\big) = \lim\_{h \to 0} \left(\frac{\cos(x)\cos(h) - \sin(x)\sin(h) - \cos(x)}{h}\right) $$

Factor out $ \cos(x) $.

$$ \tfrac{d}{dx}\big(\cos(x)\big) = \lim\_{h \to 0} \left(\frac{\cos(x)\big(\cos(h) - 1\big) - \sin(x)\sin(h)}{h}\right) $$

Split the limit.

$$ \tfrac{d}{dx}\big(\cos(x)\big) = \lim\_{h \to 0} \left(\frac{\cos(x)\big(\cos(h) - 1\big)}{h}\right) - \lim\_{h \to 0} \left(\frac{\sin(x)\sin(h)}{h}\right) $$

Factor out all factors without $ h $.

$$ \tfrac{d}{dx}\big(\cos(x)\big) = \cos(x) \cdot \lim\_{h \to 0} \left(\frac{\cos(h) - 1}{h}\right) - \sin(x) \cdot \lim\_{h \to 0} \left(\frac{\sin(h)}{h}\right) $$

Evaluate these limits. Use that [the second limit is equal to $ 1 $](/proofs/limit-sinx-over-x) and $ \cos(0) = 1 $.

$$
\begin{aligned}
\tfrac{d}{dx}\big(\cos(x)\big) &= \cos(x) \cdot \lim\_{h \to 0} \left(\frac{1 - 1}{h}\right) - \sin(x) \cdot 1 \newline
&= \cos(x) \cdot 0 - \sin(x) \cdot 1 \newline
&= -\sin(x)
\end{aligned}
$$
