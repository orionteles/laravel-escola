<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 100);
            $table->string('matricula', 20);
            $table->string('cpf', 14);
            $table->string('telefone', 15);
            $table->string('email', 50);
            $table->integer('cep')->nullable();
            $table->string('logradouro', 100)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->char('uf', 2)->nullable();
            $table->integer('municipio')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professors');
    }
}
