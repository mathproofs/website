<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Proof extends Model
{
    use HasFactory;
    use Searchable;

    protected $casts = [
        'category' => Category::class,
    ];

    public function foundations(): BelongsToMany
    {
        return $this->belongsToMany(self::class, 'foundation_implication', 'implication_id', 'foundation_id');
    }

    public function implications(): BelongsToMany
    {
        return $this->belongsToMany(self::class, 'foundation_implication', 'foundation_id', 'implication_id');
    }
}
