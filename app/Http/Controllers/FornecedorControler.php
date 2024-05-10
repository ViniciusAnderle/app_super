<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $forncedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '11',// São Paulo SP
                'telefone' => '00000-0000'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '0',
                'ddd' => '42',// Guarapuava PR
                'telefone' => '00000-0000'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'cnpj' => '0',
                'ddd' => '55',// RS
                'telefone' => '00000-0000'
            ],
            3 => [
                'nome' => 'Fornecedor 4',
                'status' => 'S',
                'cnpj' => '0',
                'ddd' => '55',// RS
                'telefone' => '00000-0000'
            ],
            4 => [
                'nome' => 'Fornecedor 5',
                'status' => 'S',
                'cnpj' => '0',
                'ddd' => '55',// RS
                'telefone' => '00000-0000'
            ],
            ];
}
}