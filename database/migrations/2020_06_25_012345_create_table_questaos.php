<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableQuestaos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedbigInteger('teste_id')->nullable();
            $table->text('enunciado');
            $table->string('respostaA');
            $table->string('respostaB');
            $table->string('respostaC');
            $table->string('respostaD');
            $table->string('respostaE');
            $table->string('valorQuestao');
            $table->timestamps();

            $table->foreign('teste_id')->references('id')->on ('testes')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questaos');
    }
}
