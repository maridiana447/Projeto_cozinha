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
        Schema::create('cardapio', function (Blueprint $table) {
            $table->id();
            $table->string('cafe_manha');
            $table->string('almoco');
            $table->string('cafe_tarde');
            $table->date('dia');
            $table->string('descricao');
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
        schema::table('cardapio', function (blueprint $table) {
            $table->dropForeign(['id_funcionario']);
            $table->dropColumn('id_funcionario');
        });
        Schema::dropIfExists('cardapio');
    }
};
