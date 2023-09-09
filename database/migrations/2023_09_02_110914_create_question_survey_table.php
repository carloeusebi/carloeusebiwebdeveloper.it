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
        Schema::connection('mysql2')->create('question_survey', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('question_id', unsigned: true);
            $table->bigInteger('survey_id', unsigned: true);
            $table->json('answers')->nullable();
            $table->boolean('completed')->nullable();
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('question_survey');
    }
};
