<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('anggotas_pemb', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nokontrak', 20);
            $table->string('nocif', 20);
            $table->string('kdprd', 2);
            $table->string('nama');
            $table->bigInteger('sisapokok')->default(0);
            $table->bigInteger('sisamargin')->default(0);
            $table->string('jw');
            $table->date('jatuhtempo');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas_pemb');
    }
};
