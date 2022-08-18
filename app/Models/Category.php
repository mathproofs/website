<?php

namespace App\Models;

use Illuminate\Support\Collection;

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

    public function proofs(): Collection
    {
        return Proof::where('category', $this->value)->get();
    }
}
