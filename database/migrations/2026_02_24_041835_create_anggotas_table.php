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
        Schema::create('anggotas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('alamat')->nullable();
            $table->string('keluarahan')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('keta')->nullable();
            $table->string('hp')->nullable();
            $table->string('kdpos')->nullable();
            $table->string('sex')->nullable();
            $table->string('tmptlhr')->nullable();
            $table->string('tgllhr')->nullable();
            $table->string('jnsid')->nullable();
            $table->string('noid')->nullable();
            $table->string('nmibu')->nullable();
            $table->string('is_active', 1)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggotas');
    }
};
