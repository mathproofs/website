<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    public function up(): void
    {
        Schema::create('foundation_implication', function (Blueprint $table) {
            $table->id();
            $table->foreignId('foundation_id');
            $table->foreignId('implication_id');
            $table->timestamps();
        });
    }
};
