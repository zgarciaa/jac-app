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
        Schema::create('persons', function (Blueprint $table) {
            $table->string('document_number')->primary();
            $table->string('phone_number')->unique();
            $table->string('first_name');
            $table->string('other_name')->nullable();
            $table->string('first_surname');
            $table->string('second_surname')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('persons', function (Blueprint $table){
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP')->change();
            $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
