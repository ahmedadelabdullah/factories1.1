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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id');
            $table->unsignedInteger('quantity');
            $table->unsignedInteger('price');
            $table->text('description');
            $table->unsignedBigInteger('sub_total');
            $table->timestamps();

            $table->foreign('invoice_id')
                ->references('id')->on('invoices')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
