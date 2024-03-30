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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
        // Schema::create('kategori', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama');
        // });
        // Schema::create('menu', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('nama');
        //     $table->unsignedInteger('harga');
        //     $table->string('kategori_nama');
        // });
        // Schema::create('pesanan', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedInteger('jml');
        //     $table->integer('menu_id');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
