<?php

namespace App\Models;

enum Category: string
{
    case ALGEBRA = 'algebra';
    case CALCULUS = 'calculus';
    case GEOMETRY = 'geometry';
    case NUMBER_THEORY = 'number-theory';

    public function name(): string
    {
        return match ($this) {
            self::ALGEBRA => 'Algebra',
            self::CALCULUS => 'Calculus',
            self::GEOMETRY => 'Geometry',
            self::NUMBER_THEORY => 'Number Theory',
        };
    }
}
