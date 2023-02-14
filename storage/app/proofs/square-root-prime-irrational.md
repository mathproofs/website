---
title: The square root of a prime number is always irrational
description: This proofs shows that the square root of a prime number is always irrational.
category: number-theory
---

## Statement

Given prime number $ p $, then $ \sqrt{p} \notin \Bbb{Q} $.

## Proof

Let $ p $ be a prime number.

By contradiction, suppose $ \sqrt{p} $ is rational, so that it can be written as $ \dfrac{a}{b} $ where $ a, b \in \Z $ and $ a $ and $ b $ are relatively prime.

$$ \sqrt{p} = \frac{a}{b} $$

$$ p = \frac{a^2}{b^2} $$

$$ a^2 = pb^2 $$

Because $ b \in \Z \implies b^2 \in \Z $, applies $ a^2 \in p\Z $.

Factor $ a $ into prime numbers, which means $ a^2 $ has all the prime factors twice.

$$ a = p_1 \cdot p_2 \cdot p_3 \cdot ... \implies a^2 = p_1^2 \cdot p_2^2 \cdot p_3^2 \cdot ... $$

Since $ a^2 \in p\Z $, one of the prime factors of $ a^2 $ must be $ p $. And since $ a^2 $ has double the factors of $ a $, one of the factors of $ a $ must also be $ p $. Therefore:

$$ a^2 \in p\Z \implies a \in p\Z $$

Now write $ a $ as $ pm $, where $ m \in \Z $.

$$ (pm)^2 = pb^2 $$

$$ p^2 m^2 = pb^2 $$

$$ b^2 = pm^2 $$

Since $ m \in \Z \implies m^2 \in \Z $ applies $ b^2 \in p\Z $. Using similar logic as above, we get:

$$ b^2 \in p\Z \implies b \in p\Z $$

This means that both $ a $ and $ b $ are divisible by $ p $, and that the assumption that $ a $ and $ b $ were relatively prime is broken. Therefore, there exist no $ a $ and $ b $ such that $ \sqrt{p} = \dfrac{a}{b} $, and thus $ \sqrt{p} $ is always irrational.
