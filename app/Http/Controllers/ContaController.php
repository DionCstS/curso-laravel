<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar as contas

    public function index() {
        return view('contas.index');
    }

    public function create() {
        return view('contas.create');
    }

    //Detalhes da conta

    //Carregar formulário cadastrar nova conta

    //Cadastrar no banco de dados nova conta 

    //Carregar o formulario editar a conta

    //Editar no banco de dados a conta 

    //Excluir a conta do banco de dados 
}
