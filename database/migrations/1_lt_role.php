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
        Schema::create('LtRole', function (Blueprint $table) {
            $table->string('IdRole')->primary();
            $table->boolean('Stsrc')->nullable(false)->default(1);
            $table->string('UserIn')->nullable(false);
            $table->timestamp('DateIn')->nullable(false);
            $table->string('UserUp')->nullable();
            $table->timestamp('DateUp')->nullable();
            $table->string('Description')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lt_roles');
    }
};
