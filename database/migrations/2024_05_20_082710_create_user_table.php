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
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255); // name, varchar(255), not null
            $table->string('email', 255); // email, varchar(255), not null
            $table->string('phone', 255); // phone, varchar(255), not null
            $table->string('username', 255); // username, varchar(255), not null
            $table->string('password', 255); // password, varchar(255), not null
            $table->string('address', 255); // address, varchar(255), not null
            $table->string('image', 255); // image, varchar(255), not null
            $table->string('roles', 50)->default('admin'); 
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
        Schema::dropIfExists('user');
    }
};
