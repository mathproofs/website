---
title: The definition of the derivative
description: This proofs shows what the definition of the derivative is and how it came about
category: calculus
---

## Statement

To find the gradient $ m $ of any function $ f $ at point $ x $, you use:

$$ m = \lim\_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

## The average increase between two points

To get the average increase between points $ A $ and $ B $, you use:

$$ m = \frac{\Delta y}{\Delta x} = \frac{y_A - y_B}{x_A - x_B} $$

When $ y = f(x) $, you get the following.

$$ m = \frac{f(x_A) - f(x_B)}{x_A - x_B} $$

## The gradient at one point

To get the gradient/slope at one point, we must choose another point that is very close to the first point.

When $ x_A $ is the point of which we want to know the gradient/slope, the other point can be $ x_A + 0.1 $ (the smaller the better). Note that the difference between $ -0.01 $ and $ 0.01 $ in the denominator is negligible.

$$ m = \frac{f(x_A) - f(x_A + 0.1)}{x_A - (x_A + 0.01)} = \frac{f(x_A) - f(x_A + 0.1)}{0.01} $$

The closer the two are to each other, the more accurate the calculation becomes. Yet, we can't use $ 0 $, since dividing by $ 0 $ is undefined.

## Using limits

Although we can't use $ 0 $, we can approach $ 0 $ using limits.

A limit is a way to say that a variable approaches a value while never actually being that value.

$$ m = \lim\_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

-   This is the notation for limits. Write $ \lim $ and beneath it the variable and the value it almost but not quite reaches.
-   When working with derivatives, we often use $ h $ for the almost-zero variable.
-   Note that $ h $ can't be zero since you'll be dividing by zero then, and that is undefined.

## Notation

The derivative has its own notation. The gradient/slope of $ f(x) $ is often written as $ f'(x) $. The definition then becomes:

$$ f'(x) = \lim\_{h \to 0}\left(\frac{f(x + h) - f(x)}{h}\right) $$

This function $ f' $ is called "the derivative of $ f $", or just "the derivative".
