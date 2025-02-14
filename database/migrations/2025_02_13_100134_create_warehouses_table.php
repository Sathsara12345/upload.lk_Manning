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
        Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->string('packs')->nullable(); // add packs column
            $table->string('item_name')->nullable(); // add item_name column
            $table->string('lorry_no')->nullable(); // add lorry_no column
            $table->decimal('weight', 10, 2)->nullable(); // add weight column
            $table->decimal('weight_balance', 10, 2)->nullable(); // add weight_balance column
            $table->decimal('total_sales_as_per', 10, 2)->nullable(); // add total_sales_as_per column
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouses');
    }
};
