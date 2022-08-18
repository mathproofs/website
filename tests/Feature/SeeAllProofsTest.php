<?php

use App\Models\Proof;

test('a user can see all proofs', function () {
    $proof = Proof::factory()->create();
    $this->get(route('proofs.index'))->assertSee($proof->title);
});

test('a user can search proofs', function () {
    $proof = Proof::factory()->create();
    $this->get(route('proofs.index', ['search' => $proof->title]))->assertSee($proof->title);
    $this->get(route('proofs.index', ['search' => 'Random text']))->assertDontSee($proof->title);
});

test('a user can filter proofs by category', function () {
    $proof = Proof::factory()->create();
    $this->get(route('proofs.index', ['category' => $proof->category]))->assertSee($proof->title);
    $this->get(route('proofs.index', ['category' => 'random-category']))->assertDontSee($proof->title);
});

test('a user can filter and search proofs', function () {
    $proof = Proof::factory()->create();
    $this->get(route('proofs.index', ['category' => $proof->category, 'search' => substr($proof->title, 0, 10)]))->assertSee($proof->title);
    $this->get(route('proofs.index', ['category' => $proof->category, 'search' => 'Random search']))->assertDontSee($proof->title);
    $this->get(route('proofs.index', ['category' => 'random-category', 'search' => substr($proof->title, 0, 10)]))->assertDontSee($proof->title);
    $this->get(route('proofs.index', ['category' => 'random-category', 'search' => 'Random search']))->assertDontSee($proof->title);
});
