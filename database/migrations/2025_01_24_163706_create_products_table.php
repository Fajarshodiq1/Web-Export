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
            
            $table->string('name');
            $table->string('slug');
            $table->string('title');
            $table->text('about');
            $table->string('thumbnail');
            $table->string('thumbnail2');
            $table->string('thumbnail3');
            $table->string('thumbnail4');
            $table->string('appearance');
            $table->string('mesh');
            $table->string('plant_used');
            $table->string('active_ingridient');
            $table->string('sample');
            $table->string('self_life');

            $table->unsignedBigInteger('price');

            $table->boolean('is_open');

            $table->foreignId('category_id')->constrained()->cascadeOnDelete();

            $table->softDeletes();
            $table->timestamps();
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