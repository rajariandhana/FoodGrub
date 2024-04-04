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
        Schema::create('order_menus', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('order_id')->constrained()->onDelete('cascade');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('menu_id')->nullable();
            $table->string('menu_nama');
            $table->unsignedBigInteger('menu_harga');
            $table->unsignedBigInteger('menu_qty');

            $table->foreign('order_id')->references('id')->on('orders')->onDelete('set null');
            $table->foreign('menu_id')->references('id')->on('menus')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_menus');
    }
};
