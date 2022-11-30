---
title: Derivative of sin(x)
description: This proof shows what the derivative of sin(x) is.
category: calculus
foundations: [definition-of-derivative, sine-cosine-angle-formula, limit-sinx-over-x]
---

## Statement

The derivative of $ \sin(x) $ is:

$$ \tfrac{d}{dx}\big(\sin(x)\big) = \cos(x) $$

## Proof

Take [the definition of the derivative](/proofs/definition-of-derivative):

$$ \tfrac{d}{dx}\big(\sin(x)\big) = \lim\_{h \to 0} \left(\frac{\sin(x + h) - \sin(x)}{h}\right) $$

Use [the angle sum formula for sine](/proofs/sine-cosine-angle-formula) to expand $ \sin(x + h) $:

$$ \tfrac{d}{dx}\big(\sin(x)\big) = \lim\_{h \to 0} \left(\frac{\sin(x)\cos(h) + \cos(x)\sin(h) - \sin(x)}{h}\right) $$

Factor out $ \sin(x) $.

$$ \tfrac{d}{dx}\big(\sin(x)\big) = \lim\_{h \to 0} \left(\frac{\sin(x)\big(\cos(h) - 1\big) + \cos(x)\sin(h)}{h}\right) $$

Split the limit.

$$ \tfrac{d}{dx}\big(\sin(x)\big) = \lim\_{h \to 0} \left(\frac{\sin(x)\big(\cos(h) - 1\big)}{h}\right) + \lim\_{h \to 0} \left(\frac{\cos(x)\sin(h)}{h}\right) $$

Factor out all factors without $ h $.

$$ \tfrac{d}{dx}\big(\sin(x)\big) = \sin(x) \cdot \lim\_{h \to 0} \left(\frac{\cos(h) - 1}{h}\right) + \cos(x) \cdot \lim\_{h \to 0} \left(\frac{\sin(h)}{h}\right) $$

Evaluate these limits. Use that [the second limit is equal to $ 1 $](/proofs/limit-sinx-over-x) and $ \cos(0) = 1 $.

$$
\begin{aligned}
\tfrac{d}{dx}\big(\sin(x)\big) &= \sin(x) \cdot \lim\_{h \to 0} \left(\frac{1 - 1}{h}\right) + \cos(x) \cdot 1 \newline
&= \sin(x) \cdot 0 + \cos(x) \cdot 1 \newline
&= \cos(x)
\end{aligned}
$$
