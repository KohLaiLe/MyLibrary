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
        Schema::create('TrBorrowBook', function (Blueprint $table) {
            $table->string('IdBorrowBook')->primary();
            $table->boolean('Stsrc')->nullable(false)->default(1);
            $table->string('UserIn')->nullable(false);
            $table->timestamp('DateIn')->nullable(false);
            $table->string('UserUp')->nullable();
            $table->timestamp('DateUp')->nullable();
            $table->dateTime('BorrowDate')->nullable(false);
            $table->dateTime('DueDate')->nullable(false);
            $table->dateTime('ReturnDate');
            $table->string('IdMember')->nullable(false);
            $table->string('IdBook')->nullable(false);
            $table->foreign('IdMember')->references('IdMember')->on('MsMember')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('IdBook')->references('IdBook')->on('MsBook')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_borrow_books');
    }
};
