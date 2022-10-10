---
title: Sine rule
description: This proof shows that the ratio between a triangle's side length and the sine of its angle is the same for all sides.
category: geometry
---

## Statement

The ratio between a triangle's side length and the sine of its angle is the same for all sides:

$$ \frac{a}{\sin(\alpha)} = \frac{b}{\sin(\beta)} = \frac{c}{\sin(\gamma)} $$

![A triangle with sides a, b and c](/proofs/sine-rule.svg)

## Proof

Construct altitudes $ h $ and $ k $ like the image below:

![A triangle with sides a, b and c and altitudes h and k](/proofs/sine-rule-proof.svg)

### Altitude $ h $

Write the following equation from the definition of sine:

$$ \sin(\alpha) = \frac{h}{b} $$

Flip the fraction and multiply both sides by $ a $.

$$ \frac{1}{\sin(\alpha)} = \frac{b}{h} $$

$$ \frac{a}{\sin(\alpha)} = \frac{ab}{h} $$

Now write another equation using the definition of sine:

$$ \sin(\beta) = \frac{h}{a} $$

Flip the fraction and multiply both sides by $ b $.

$$ \frac{1}{\sin(\beta)} = \frac{a}{h} $$

$$ \frac{b}{\sin(\beta)} = \frac{ab}{h} $$

Note that both $ \frac{a}{\sin(\alpha)} $ and $ \frac{b}{\sin(\beta)} $ are equal to $ \frac{ab}{h} $, giving:

$$ \frac{a}{\sin(\alpha)} = \frac{b}{\sin(\beta)} $$

### Altitude $ k $

Write the following equation from the definition of sine:

$$ \sin(\alpha) = \frac{k}{c} $$

Flip the fraction and multiply both sides by $ a $.

$$ \frac{1}{\sin(\alpha)} = \frac{c}{k} $$

$$ \frac{a}{\sin(\alpha)} = \frac{ac}{k} $$

Now write another equation using the definition of sine:

$$ \sin(\gamma) = \frac{k}{a} $$

Flip the fraction and multiply both sides by $ c $.

$$ \frac{1}{\sin(\gamma)} = \frac{a}{k} $$

$$ \frac{c}{\sin(\gamma)} = \frac{ac}{h} $$

Note that both $ \frac{a}{\sin(\alpha)} $ and $ \frac{c}{\sin(\gamma)} $ are equal to $ \frac{ac}{h} $, giving:

$$ \frac{a}{\sin(\alpha)} = \frac{c}{\sin(\gamma)} $$

## Conclusion

Since $ \frac{a}{\sin(\alpha)} = \frac{b}{\sin(\beta)} $ and $ \frac{a}{\sin(\alpha)} = \frac{c}{\sin(\gamma)} $:

$$ \frac{a}{\sin(\alpha)} = \frac{b}{\sin(\beta)} = \frac{c}{\sin(\gamma)} $$
