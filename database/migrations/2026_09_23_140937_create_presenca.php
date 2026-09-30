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
        Schema::create('presenca', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_aluno_turma');
            $table->foreign('id_aluno_turma')->references('id')->on('aluno_turma')->onDelete('cascade');
            $table->date('dia');
            $table->string('refeicao');
            $table->unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id')->on('funcionario')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::table('presenca', function (blueprint $table) {
            $table->dropForeign(['id_aluno_turma']);
            $table->dropColumn('id_aluno_turma');
            $table->dropForeign(['id_funcionario']);
            $table->dropColumn('id_funcionario');
        });
        
        Schema::dropIfExists('presenca');
    }
};
