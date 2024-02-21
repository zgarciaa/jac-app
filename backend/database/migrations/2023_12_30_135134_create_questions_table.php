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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('statement');
            $table->string('group');
            $table->string('sub_group')->nullable();
            $table->boolean('multiple_answers')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('questions', function (Blueprint $table){
            $table->timestamp('created_at')->default('CURRENT_TIMESTAMP')->change();
            $table->timestamp('updated_at')->default('CURRENT_TIMESTAMP')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
