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
        Schema::create('MsBook', function (Blueprint $table) {
            $table->string('IdBook')->primary();
            $table->boolean('Stsrc')->nullable(false)->default(1);
            $table->string('UserIn')->nullable(false);
            $table->timestamp('DateIn')->nullable(false);
            $table->string('UserUp')->nullable();
            $table->timestamp('DateUp')->nullable();
            $table->string('Title');
            $table->string('Author');
            $table->string('ISBN');
            $table->string('ImageURL');
            $table->boolean('IsAvailable');
            $table->string('IdBookCategory')->nullable(false);
            $table->foreign('IdBookCategory')->references('IdBookCategory')->on('LtBookCategory')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_books');
    }
};
