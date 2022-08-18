<?php

use App\Models\Proof;

test('a user can search proofs', function () {
    $proof = Proof::factory()->create();
    $this->get(route('proofs.search', ['query' => $proof->title]))->assertSee($proof->title);
    $this->get(route('proofs.search', ['query' => 'Random text']))->assertDontSee($proof->title);
});
