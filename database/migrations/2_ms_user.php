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
        Schema::create('MsUser', function (Blueprint $table) {
            $table->string('IdUser')->primary();
            $table->boolean('Stsrc')->nullable(false)->default(1);
            $table->string('UserIn')->nullable(false);
            $table->timestamp('DateIn')->nullable(false);
            $table->string('UserUp')->nullable();
            $table->timestamp('DateUp')->nullable();
            $table->string('Email')->unique()->nullable(false);
            $table->string('Password')->nullable(false);
            $table->string('Status')->default('Active');
            $table->string('IdRole')->nullable(false); // Keep this line for IdRole as a UUID
            $table->foreign('IdRole')->references('IdRole')->on('LtRole')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
