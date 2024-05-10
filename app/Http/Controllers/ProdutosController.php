<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
{
    $produtos = [
        [
            'nome' => 'Produto A',
            'descricao' => 'Descrição do Produto A',
            'preco' => 'R$ 100,00',
        ],
        [
            'nome' => 'Produto B',
            'descricao' => 'Descrição do Produto B',
            'preco' => 'R$ 200,00',
        ],
        [
            'nome' => 'Produto C',
            'descricao' => 'Descrição do Produto C',
            'preco' => 'R$ 150,00',
        ],
    ];

    return view('app.produtos', ['produtos' => $produtos]);
}

}
