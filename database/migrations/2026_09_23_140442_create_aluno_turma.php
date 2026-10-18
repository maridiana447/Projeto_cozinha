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
            $table->unsignedBigInteger('id_aluno_presenca');
            $table->foreign('id_aluno_presenca')->references('id')->on('aluno_presenca')->onDelete('cascade');
            $table->unsignedBigInteger('id_modalidade');
            $table->foreign('id_modalidade')->references('id')->on('modalidade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        schema::table('aluno_turma', function (blueprint $table) {
            $table->dropForeign(['id_aluno_presenca']);
            $table->dropColumn('id_aluno_presenca');
            $table->dropForeign(['id_modalidade']);
            $table->dropColumn('id_modalidade');
        });
        Schema::dropIfExists('aluno_turma');
    }
};
