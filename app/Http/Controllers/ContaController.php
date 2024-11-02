<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContaController extends Controller
{
    // Listar as contas

    public function index() {
        return view('contas.index');
    }

    //Carregar formulário cadastrar nova conta

    public function create() {
        return view('contas.create');
    }

    //Cadastrar no banco de dados nova conta 

    public function store() {
        return dd("Cadastrar");
    }

    //Detalhes da Conta

    public function show() {
        return view('contas.show');
    }

    //Carregar o formulario editar a conta

    public function edit() {
        return view('contas.edit');
    }

    //Editar no banco de dados a conta 

    public function update() {
        return dd("Atualizar");
    }

    //Excluir a conta do banco de dados 

    public function destroy() {
        return dd("Deletar");
    }

    

    

    

    

    

    
}
