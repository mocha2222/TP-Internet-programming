<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(column:'name');
            $table->text(column:'description')->nullable();
            $table->decimal(column:'pricing');
            $table->foreignId(column:'category_id')->unsigned();
            $table->jsonb(column:'images')->nullable();
            $table->timestamps();

            $table->foreign(column:'category_id')->references(column:'id')->on(table:'categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
