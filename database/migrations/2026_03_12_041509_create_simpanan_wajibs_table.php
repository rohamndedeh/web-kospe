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
        Schema::create('anggotas_sw', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('notab', 16);
            $table->string('nocif', 16);
            $table->string('kodeprd', 16);
            $table->string('fnama');
            $table->bigInteger('sahirrp')->default(0);
            $table->date('tgl_reg')->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas_sw');
    }
};
