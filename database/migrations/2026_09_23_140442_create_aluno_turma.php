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
        Schema::create('aluno_turma', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aluno');
            $table->foreign('id_aluno')->references('id')->on('aluno')->onDelete('cascade');
            $table->unsignedBigInteger('id_turma');
            $table->foreign('id_turma')->references('id')->on('turma')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('aluno_turma', function (blueprint $table) {
            $table->dropForeign(['id_aluno']);
            $table->dropColumn('id_aluno');
            $table->dropForeign(['id_turma']);
            $table->dropColumn('id_turma');
        });
        Schema::dropIfExists('aluno_turma');
    }
};
