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

        // you can check more column types in the documentation of Laravel

        // https://laravel.com/docs/12.x/migrations#columns

        Schema::create('inventory', function (Blueprint $table) {

            $table->id();                // Primary key (auto-increment)

            $table->string('name');       // Item name

            $table->integer('quantity');  // Quantity in stock

            $table->decimal('price', 8, 2); // Price per item

            $table->timestamps();        // Created at and updated at

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void

    {

        Schema::dropIfExists('inventory');  // Drops the inventory table if it exists

    }

};
