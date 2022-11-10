---
title: Trig values of 45 degrees
description: This proof shows the exact value of sin(45), cos(45) and tan(45)
category: geometry
foundations: [pythagorean-theorem]
---

## Statement

The exact value of the trigonometry functions of $ 45 \degree $ are:

$$ \sin(45 \degree) = \tfrac{1}{2}\sqrt{2} $$

$$ \cos(45 \degree) = \tfrac{1}{2}\sqrt{2} $$

$$ \tan(45 \degree) = 1 $$

## Proof

Construct triangle $ ABC $ with $ \angle A = \angle C = 45 \degree $ and $ \angle B = 90 \degree $, like the image below.

![](/proofs/trig-values-45-degrees.svg)

Note that this triangle is an isosceles triangle with $ AB = BC $. Now call those sides $ m $.

Calculate $ AC $ using the [Pythagorean theorem](/proofs/pythagorean-theorem):

$$ AC = \sqrt{AB^2 + BC^2} = \sqrt{m^2 + m^2} = \sqrt{2m^2} = m\sqrt{2} $$

### Sine

From the triangle, note that $ \sin(\angle A) = \dfrac{BC}{AC} $, so:

$$ \sin(45 \degree) = \frac{m}{m\sqrt{2}} = \frac{1}{\sqrt{2}} = \tfrac{1}{2}\sqrt{2} $$

### Cosine

From the triangle, note that $ \cos(\angle A) = \dfrac{AB}{AC} $, so:

$$ \cos(45 \degree) = \frac{m}{m\sqrt{2}} = \frac{1}{\sqrt{2}} = \tfrac{1}{2}\sqrt{2} $$

### Tangent

From the triangle, note that $ \tan(\angle A) = \dfrac{BC}{AB} $, so:

$$ \tan(45 \degree) = \frac{m}{m} = 1 $$
