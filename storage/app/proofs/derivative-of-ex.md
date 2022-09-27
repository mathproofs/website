---
title: The derivative of e to the x
description: This proof shows that the definition of e^x is e^x.
category: calculus
foundations: [definition-of-derivative, adding-exponents]
---

## Statement

The derivative of $ e^x $ is $ e^x $:

$$ \tfrac{d}{dx}(e^x) = e^x $$

## The definition of e

Take the definition of $ e $.

$$ e = \lim\_{n \to \infin}\bigg(\left(1 + \tfrac{1}{n}\right)^n\bigg) $$

When substituting $ n = \frac{1}{h} $, $ h $ goes to $ 0 $ as $ n $ goes to $ \infin $.

$$ e = \lim\_{h \to 0}\bigg((1 + h)^\frac{1}{h}\bigg) $$

Later in the proof this definition of $ e $ is used.

## Proof

Define function $ f $.

$$ f(x) = e^x $$

Take [the definition of the derivative](/proofs/definition-of-derivative) and substitute.

$$ f'(x) = \lim\_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{e^{x + h} - e^x}{h}\right) $$

By the rule of [adding exponents](/proofs/adding-exponents), write $ e^{x + h} = e^x \* e^h $ and factor out $ e^x $.

$$ f'(x) = \lim\_{h \to 0}\left(\frac{e^x \* e^h - e^x}{h}\right) $$

$$ f'(x) = \lim\_{h \to 0}\left(\frac{e^x(e^h - 1)}{h}\right) $$

Since $ e^x $ does not include the limit variable, $ h $, bring it out of the limit.

$$ f'(x) = \lim\_{h \to 0}\left(e^x \* \frac{e^h - 1}{h}\right) $$

$$ f'(x) = e^x \* \lim\_{h \to 0}\left(\frac{e^h - 1}{h}\right) $$

Now substitute $ e $ in the limit with what is defined above. Since that definition uses $ h \to 0 $ and this limit does too, it is not required to write the limit again.

$$ f'(x) = e^x \* \lim\_{h \to 0}\left(\frac{\big((1 + h)^\frac{1}{h}\big)^h - 1}{h}\right) $$

Multiply the exponents and cancel like terms.

$$ f'(x) = e^x \* \lim\_{h \to 0}\left(\frac{1 + h - 1}{h}\right) $$

$$ f'(x) = e^x \* \lim\_{h \to 0}\left(\frac{h}{h}\right) $$

Finally, since $ \frac{h}{h} $ is $ 1 $, the limit disappears.

$$ f'(x) = e^x \* \lim\_{h \to 0}\big(1\big) $$

$$ f'(x) = e^x $$
