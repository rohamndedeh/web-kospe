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
        Schema::create('izin_cuti', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('idstaf');
            $table->string('nama');
            $table->string('type')->nullable();
            $table->string('tgl_start')->nullable();
            $table->string('tgl_end')->nullable();
            $table->integer('jml_hari')->default(0);
            $table->integer('sisa_cuti')->default(0);
            $table->string('approve_1')->default(0);
            $table->string('tgl_approve_1')->default(0);
            $table->string('approve_2')->default(0);
            $table->string('tgl_approve_2')->default(0);
            $table->text('ket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('izin_cuti');
    }
};
