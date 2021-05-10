<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function listar(){

        $clientes = Clientes::all();
        return view('clientes.listar', ['clientes'-> $clientes]);
    }
}
