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
        Schema::create('MsMember', function (Blueprint $table) {
            $table->string('IdMember')->primary();
            $table->boolean('Stsrc')->nullable(false)->default(1);
            $table->string('UserIn')->nullable(false);
            $table->timestamp('DateIn')->nullable(false);
            $table->string('UserUp')->nullable();
            $table->timestamp('DateUp')->nullable();
            $table->string('FirstName');
            $table->string('LastName');
            $table->string('Address');
            $table->string('PhoneNumber');
            $table->string('IdUser')->nullable(false);
            $table->foreign('IdUser')->references('IdUser')->on('MsUser')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ms_members');
    }
};
