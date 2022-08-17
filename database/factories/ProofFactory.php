<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProofFactory extends Factory
{
    public function definition(): array
    {
        $title = fake()->sentence();

        return [
            'title' => $title,
            'slug' => str($title)->slug(),
            'body' => '<p>' . collect(fake()->paragraphs(6))->join('</p><p>') . '</p>',
        ];
    }
}
