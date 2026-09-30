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
        Schema::create('movimentacao_estoque', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_estoque');
            $table->foreign('id_estoque')->references('id')->on('estoque')->onDelete('cascade');
            $table->string('tipo_movimentacao');
            $table->decimal('quantidade',10,2);
            $table->date('dia');
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
        schema::table('movimentacao_estoque', function (blueprint $table) {
            $table->dropForeign(['id_estoque']);
            $table->dropColumn('id_estoque');
            $table->dropForeign(['id_funcionario']);
            $table->dropColumn('id_funcionario');
        });
        Schema::dropIfExists('movimentacao_estoque');
    }
};
