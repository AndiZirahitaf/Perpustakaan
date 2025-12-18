<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Informasi akun
            $table->string('name', 100);
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');

            // Informasi pribadi
            $table->string('phone', 20);
            $table->enum('gender', ['L', 'P']);
            $table->date('birth_date');
            $table->text('address');

            // Auth
            $table->rememberToken();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};