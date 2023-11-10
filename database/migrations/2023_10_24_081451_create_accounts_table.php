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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('start_balance_status' , ['debtor' , 'creditor' , 'balanced']);
            $table->bigInteger('start_balance')->default(0);
            $table->bigInteger('current_balance');
            $table->longText('comment')->nullable();
            $table->enum('active' , ['true' , 'false'])->default('true');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
