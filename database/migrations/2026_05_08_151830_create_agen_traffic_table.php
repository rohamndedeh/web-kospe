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
        Schema::create('agen_traffic', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ip')->nullable();
            $table->string('browser')->nullable();
            $table->string('browser_version')->nullable();
            $table->string('platform')->nullable();
            $table->string('device')->nullable();
            $table->boolean('is_mobile')->default(false);
            $table->boolean('is_tablet')->default(false);
            $table->boolean('is_desktop')->default(false);
            $table->text('user_agent')->nullable();
            $table->string('url')->nullable();
            $table->string('method')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agen_traffic');
    }
};
