<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
    	'name', 'data_de_nascimento', 'sexo', 'rg', 'cpf', 'email', 'telefone', 'endereco', 'admissao'
    	'cargo', 'banco', 'agencia', 'conta', 'remuneracao', 'observacao'
    ];
}
