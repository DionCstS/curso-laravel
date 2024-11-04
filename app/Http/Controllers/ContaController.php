<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conta;

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

    public function store(Request $request) {
        //Cadastro no banco de dados na tabela contas os valores de todos os campos 
        $conta = Conta::create($request->all());

        //Redirecionar o usuário, Enviar a mensagem de sucesso
        return redirect()->route('show.conta')->with('success', 'Conta cadastrada com sucesso');
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
