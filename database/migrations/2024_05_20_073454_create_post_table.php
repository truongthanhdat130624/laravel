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
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('topic_id')->nullable();
            $table->string('title', 1000);
            $table->string('slug', 1000);
            $table->mediumText('detail');
            $table->string('image', 1000);
            $table->string('type', 100)->default('post');
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
        Schema::dropIfExists('post');
    }
};
