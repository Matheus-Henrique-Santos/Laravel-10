<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome' => 'apple', 'status' => 'Ativo', 'cnpj' => '12323412343'],
            1 => ['nome' => 'xiaomi', 'status' => 'Ativo'],
            2 => ['nome' => 'sansung', 'status' => 'Ativo'],
            3 => ['nome' => 'hawei', 'status' => 'Ativo', 'cnpj' => '12323412343'],
            4 => ['nome' => 'motorola', 'status' => 'Inativo', 'cnpj' => '12323412343'],          
        ];

        $usuarios = null;

        $cnpj = $usuarios ? 'CNPJ informado' : 'CNPJ nao informado';

        return view('app.fornecedor.index', compact('fornecedores', 'usuarios'));
    }
}
