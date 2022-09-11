---
title: An odd number plus an odd number is even
description: This proofs shows that an odd number plus an odd number will always be even.
category: number-theory
---

## Statement

Given the odd numbers $ a $ and $ b $, then $ a + b $ will be even.

## Proof

Since every odd number is a multiple of two plus one, you can write $ a = 2n + 1 $ and $ b = 2m + 1 $ where $ n, m \in \N $.

When you add $ a $ and $ b $, you can factor out a $ 2 $.

$$ a + b = 2n + 1 + 2m + 1 = 2n + 2m + 2 = 2(n + m + 1) $$

Since $ n + m + 1 $ will always be an integer, substitute $ n + m + 1 = k, k \in \N $.

$$ a + b = 2k $$

From this follows that $ 2k $ is always even, and thus $ a + b $ is always even as well.
