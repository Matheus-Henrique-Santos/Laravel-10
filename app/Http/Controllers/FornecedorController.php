<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => ['nome' => 'apple', 'status' => 'Ativo'],
            1 => ['nome' => 'xiaomi', 'status' => 'Ativo'],
            2 => ['nome' => 'sansung', 'status' => 'Ativo'],
            3 => ['nome' => 'hawei', 'status' => 'Ativo'],
            4 => ['nome' => 'motorola', 'status' => 'Inativo'],          
        ];

        $usuarios = null;

        return view('app.fornecedor.index', compact('fornecedores', 'usuarios'));
    }
}
