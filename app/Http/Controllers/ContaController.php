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

    public function store() {
        return dd("Cadastrar");
    }

    public function show() {
        return view('contas.show');
    }

    public function edit() {
        return view('contas.edit');
    }

    public function update() {
        return dd("Atualizar");
    }

    public function destroy() {
        return dd("Deletar");
    }

    //Detalhes da conta

    //Carregar formulário cadastrar nova conta

    //Cadastrar no banco de dados nova conta 

    //Carregar o formulario editar a conta

    //Editar no banco de dados a conta 

    //Excluir a conta do banco de dados 
}
