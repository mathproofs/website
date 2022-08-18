<?php

use App\Models\Category;
use App\Models\Proof;

test('a user can see a proof', function () {
    $proof = Proof::factory()->create();
    $this->get(route('proofs.show', $proof))->assertStatus(200)->assertSee($proof->title);
});

test('it shows the category if it has one but hides it otherwise', function () {
    $proof = Proof::factory()->create(['category' => Category::NUMBER_THEORY]);
    $this->get(route('proofs.show', $proof))->assertSee(Category::NUMBER_THEORY->name());

    $proof = Proof::factory()->create(['category' => null]);
    $this->get(route('proofs.show', $proof))->assertDontSee(Category::NUMBER_THEORY->name());
});
