<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = [
            [
                'nome' => 'Fornecedor A',
                'produto' => 'Produtos de papelaria',
                'contato' => 'fornecedorA@exemplo.com',
                'telefone' => '(11) 1111-1111',
            ],
            [
                'nome' => 'Fornecedor B',
                'produto' => 'Produtos eletrônicos',
                'contato' => 'fornecedorB@exemplo.com',
                'telefone' => '(22) 2222-2222',
            ],
            [
                'nome' => 'Fornecedor C',
                'produto' => 'Produtos de limpeza',
                'contato' => 'fornecedorC@exemplo.com',
                'telefone' => '(33) 3333-3333',
            ],
        ];
    
        return view('app.fornecedores', compact('fornecedores'));
    }
    
    
}
