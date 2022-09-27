---
title: An odd number times an odd number is odd
description: This proofs shows that an odd number times an odd number will always be odd.
category: number-theory
foundations: [odd-number-as-integer]
---

## Statement

Given the odd numbers $ a $ and $ b $, then $ a \* b $ will be odd.

## Proof

Since [every odd number is a multiple of two plus one](/proofs/odd-number-as-integer), you can write $ a = 2n + 1 $ and $ b = 2m + 1 $ where $ n, m \in \Z $.

When you multiply $ a $ and $ b $, you can factor out a $ 2 $.

$$ a \* b = (2n + 1)(2m + 1) = 4mn + 2n + 2m + 1 = 2(2mn + n + m) + 1 $$

Since $ 2mn + n + m $ will always be an integer, substitute $ 2mn + n + m = k, k \in \Z $.

$$ a \* b = 2k + 1 $$

From this follows that $ 2k + 1 $ is always odd, and thus $ a \* b $ is always odd as well.
