---
title: An even number times an even number is even
description: This proofs shows that an even number times an even number will always be even.
category: number-theory
---

## Statement

Given the even numbers $ a $ and $ b $, then $ a * b $ will be even.

## Proof

Since every even number is a multiple of two, you can write $ a = 2n $ and $ b = 2m $ where $ n, m \in \N $.

When you multiply $ a $ and $ b $, you can factor out a $ 2 $.

$$ a * b = 2n * 2m = 4mn = 2 * 2mn $$

Since $ 2mn $ will always be an integer, substitute $ 2mn = k, k \in \N $.

$$ a + b = 2k $$

From this follows that $ 2k $ is always even, and thus $ a * b $ is always even as well.
