<?php

use App\Models\Proof;

test('a user can see a proof', function () {
    $proof = Proof::factory()->create();
    $this->get(route('proofs.show', $proof))->assertStatus(200)->assertSee($proof->title);
});
