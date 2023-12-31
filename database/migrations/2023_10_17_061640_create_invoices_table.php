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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->unsignedInteger('invoice_number');
            $table->date('date');
            $table->unsignedInteger('n_o_models');
            $table->unsignedInteger('sale_for_one');
            $table->unsignedBigInteger('total');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')
                ->on('customers')->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
