---
title: Sine squared plus cosine squared is always one
description: This proof shows that sine squared plus cosine squared is always one, using the Pythagorean theorem.
category: geometry
foundations: [pythagorean-theorem]
---

## Statement

Sine squared plus cosine squared is always one:

$$ \sin(\theta)^2 + \cos(\theta)^2 = 1 $$

## Proof

Construct a right triangle with one angle being $ \theta $, like the image below:

![A right triangle with sides a, b and c](/proofs/sine-squared-plus-cosine-squared.svg)

From the definitions from trigonometry follow:

$$ \sin(\theta) = \frac ab \implies a = b\sin(\theta) $$

$$ \cos(\theta) = \frac cb \implies c = b\cos(\theta) $$

Using the [Pythagorean theorem](/proofs/pythagorean-theorem), find that:

$$ a^2 + c^2 = b^2 $$

When substituting $ a $ and $ c $, you get:

$$ \bigg(b\sin(\theta)\bigg)^2 + \bigg(b\cos(\theta)\bigg)^2 = b^2 $$

$$ b^2 \sin(\theta)^2 + b^2 \cos(\theta)^2 = b^2 $$

Finally, divide each term by $ b^2 $.

$$ \sin(\theta)^2 + \cos(\theta)^2 = 1 $$
