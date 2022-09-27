---
title: An even number times an odd number is even
description: This proofs shows that an even number times an odd number will always be even.
category: number-theory
foundations: [even-number-as-integer, odd-number-as-integer]
---

## Statement

Given the even number $ a $ and the odd number $ b $, then $ a \* b $ will be even.

## Proof

Since [every even number is a multiple of two](/proofs/even-number-as-integer), you can write $ a = 2n $ where $ n \in \Z $.

And since [every odd number is a multiple of two plus one](/proofs/odd-number-as-integer), you can write $ b = 2m + 1 $ where $ m \in \Z $.

When you multiply $ a $ and $ b $, you can factor out a $ 2 $.

$$ a \* b = 2n(2m + 1) = 4mn + 2n = 2(2mn + n) $$

Since $ 2mn + n $ will always be an integer, substitute $ 2mn + n = k, k \in \Z $.

$$ a \* b = 2k $$

From this follows that $ 2k $ is always even, and thus $ a \* b $ is always even as well.
