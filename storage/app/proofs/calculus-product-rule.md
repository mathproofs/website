---
title: Product rule in calculus
description: This proof shows that the derivative of a product g*j is g'*j + g*j'.
category: calculus
---

## Statement

The derivative of a product $ g(x) * j(x) $ is $ g'(x) * j(x) + g(x) * j'(x) $.

$$ \tfrac{d}{dx}\bigg(g(x) * j(x)\bigg) = g'(x) * j(x) + g(x) * j'(x) $$

## Proof

Define function $ f $.

$$ f(x) = g(x) * j(x) $$

Take the definition of the derivative.

$$ f'(x) = \lim_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

$$ f'(x) = \lim_{h \to 0}\left(\frac{g(x + h) * j(x + h) - g(x) * j(x)}{h}\right) $$

Now subtract and add $ g(x) * j(x + h) $.

$$ f'(x) = \lim_{h \to 0}\left(\frac{g(x + h) * j(x + h) - \overbrace{ g(x) * j(x + h) }^\text{subtract} + \overbrace{ g(x) * j(x + h) }^\text{add} - g(x) * j(x)}{h}\right) $$

Split the limit.

$$ f'(x) = \lim_{h \to 0}\left(\frac{g(x + h) * j(x + h) - g(x) * j(x + h)}{h}\right) + \lim_{h \to 0}\left(\frac{g(x) * j(x + h) - g(x) * j(x)}{h}\right) $$

Factor out $ j(x + h) $ in the first limit, and factor out $ g(x) $ in the second. Then move those factors out of the fraction.

$$ f'(x) = \lim_{h \to 0}\left(\frac{j(x + h) * \bigg(g(x + h) - g(x)\bigg)}{h}\right) + \lim_{h \to 0}\left(\frac{g(x) * \bigg(j(x + h) -  j(x)\bigg)}{h}\right) $$

$$ f'(x) = \lim_{h \to 0}\left(\frac{g(x + h) - g(x)}{h} * j(x + h) \right) + \lim_{h \to 0}\left(\frac{j(x + h) -  j(x)}{h} * g(x) \right) $$

Now split the limits again.

$$ f'(x) = \lim_{h \to 0}\left(\frac{g(x + h) - g(x)}{h}\right) * \lim_{h \to 0}\bigg(j(x + h)\bigg) + \lim_{h \to 0}\left(\frac{j(x + h) -  j(x)}{h}\right) * \lim_{h \to 0}\bigg(g(x)\bigg) $$

Notice:

- The first and third limit are the definition of the derivative for $ g(x) $ and $ j(x) $.
- In the second limit, $ h $ goes to $ 0 $, so $ j(x + h) $ goes to $ j(x + 0) = j(x) $.
- There is no $ h $ in the fourth limit, so this limit just becomes $ g(x) $.

$$ f'(x) = g'(x) * j(x) + j'(x) * g(x) $$
