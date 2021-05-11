<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('data_de_nascimento');
            $table->string('sexo');
            $table->string('rg');
            $table->string('cpf');
            $table->string('email')->unique();
            $table->string('telefone');
            $table->string('endereco');
            $table->string('admissao');
            $table->string('cargo');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->double('remuneracao');
            $table->string('observacao');
            $table->timestamp('email_verified_at');
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('employees');
    }
}
