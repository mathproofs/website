---
title: Trig values of 30 and 60 degrees
description: This proof shows the exact value of sin(30), cos(30), tan(30), sin(60), cos(60) and tan(60).
category: geometry
foundations: [pythagorean-theorem]
---

## Statement

The exact value of the trigonometry functions of $ 30 \degree $ and $ 60 \degree $ are:

$$ \sin(30 \degree) = \tfrac{1}{2} $$

$$ \cos(30 \degree) = \tfrac{1}{2}\sqrt{3} $$

$$ \tan(30 \degree) = \tfrac{1}{3}\sqrt{3} $$

$$ \sin(60 \degree) = \tfrac{1}{2}\sqrt{3} $$

$$ \cos(60 \degree) = \tfrac{1}{2} $$

$$ \tan(60 \degree) = \sqrt{3} $$

## Proof

Construct triangle $ ABC $ with $ \angle A = \angle B = \angle C = 60 \degree $. Then draw altitude $ CD $ on $ AB $ so that $ \angle C_1 = \angle C_2 = 30 \degree $, like the image below.

![](/proofs/trig-values-30-60-degrees.svg)

Let $ BD = m $. Because this is an equilateral triangle, $ BC = 2m $.

Now find $ CD $ from the [Pythagorean theorem](/proofs/pythagorean-theorem):

$$ CD = \sqrt{BC^2 - BD^2} = \sqrt{(2m)^2 - m^2} = \sqrt{4m^2 - m^2} = \sqrt{3m^2} = m\sqrt{3} $$

### Sine 30

From the triangle, note that $ \sin(\angle C_2) = \dfrac{BD}{BC} $, so:

$$ \sin(30 \degree) = \frac{m}{2m} = \frac{1}{2} $$

### Cosine 30

From the triangle, note that $ \cos(\angle C_2) = \dfrac{CD}{BC} $, so:

$$ \cos(30 \degree) = \frac{m\sqrt{3}}{2m} = \tfrac{1}{2}\sqrt{3} $$

### Tangent 30

From the triangle, note that $ \tan(\angle C_2) = \dfrac{BD}{CD} $, so:

$$ \tan(30 \degree) = \frac{m}{m\sqrt{3}} = \frac{1}{\sqrt{3}} = \tfrac{1}{3}\sqrt{3} $$

### Sine 60

From the triangle, note that $ \sin(\angle B) = \dfrac{CD}{BC} $, so:

$$ \sin(60 \degree) = \frac{m\sqrt{3}}{2m} = \tfrac{1}{2}\sqrt{3} $$

### Cosine 60

From the triangle, note that $ \cos(\angle B) = \dfrac{BD}{BC} $, so:

$$ \cos(60 \degree) = \frac{m}{2m} = \tfrac{1}{2} $$

### Tangent 60

From the triangle, note that $ \tan(\angle B) = \dfrac{CD}{BD} $, so:

$$ \tan(60 \degree) = \frac{m\sqrt{3}}{m} = \sqrt{3} $$
