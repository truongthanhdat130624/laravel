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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('brand_id');
            $table->string('name', 1000); 
            $table->string('slug', 1000);
            $table->float('price');
            $table->float('pricesale')->nullable();
            $table->string('image', 1000);
            $table->unsignedInteger('qty'); // qty, int, unsigned, not null
            $table->mediumText('detail'); // detail, mediumtext, not null
            $table->string('description', 255)->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('updated_by')->nullable(); // updated_by, int, unsigned, nullable
            $table->unsignedTinyInteger('status')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
