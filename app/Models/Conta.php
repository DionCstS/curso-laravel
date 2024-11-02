<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conta extends Model
{
    //Indicar o nome da tabela

    protected $table = 'contas';

    //Indicar quais campos podem ser prenchidos

    protected $fillable = ['nome', 'valor', 'vencimento'];
}
