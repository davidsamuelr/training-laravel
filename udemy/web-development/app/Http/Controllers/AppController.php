<?php

namespace App\Http\Controllers;

class AppController extends Controller
{
    public function index()
    {

    }

    public function products()
    {
        echo "Produtos";
    }

    public function customers()
    {
        echo "Clientes";
    }

    public function providers()
    {

        // $providers = ['Fornecedor 1'];
        // return view('app.providers.providers', compact('providers'));

        $providers = [
            0 => ['nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '00.000.000/000-00',
                'ddd' => '11',
                'telefone' => '0000-0000'
            ],
            1 => ['nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '85',
                'telefone' => '0000-0000'
            ],
            2 => ['nome' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32',
                'telefone' => '0000-0000'
            ]
        ];

        // operador ternário
        echo isset($providers[1]['cnpj']) ? 'CNPJ Informado' : 'CNPJ Não informado';

        return view('app.providers.providers', compact('providers'));
    }
}
