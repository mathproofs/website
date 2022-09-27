---
title: An even number plus an odd number is odd
description: This proofs shows that an even number plus an odd number will always be odd.
category: number-theory
foundations: [even-number-as-integer, odd-number-as-integer]
---

## Statement

Given the even number $ a $ and the odd number $ b $, then $ a + b $ will be odd.

## Proof

Since [every even number is a multiple of two](/proofs/even-number-as-integer), you can write $ a = 2n $ where $ n \in \Z $.

And since [every odd number is a multiple of two plus one](/proofs/odd-number-as-integer), you can write $ b = 2m + 1 $ where $ m \in \Z $.

When you add $ a $ and $ b $, you can factor out a $ 2 $.

$$ a + b = 2n + 2m + 1 = 2(n + m) + 1 $$

Since $ n + m $ will always be an integer, substitute $ n + m = k, k \in \Z $.

$$ a + b = 2k + 1 $$

From this follows that $ 2k + 1 $ is always odd, and thus $ a + b $ is always odd as well.
