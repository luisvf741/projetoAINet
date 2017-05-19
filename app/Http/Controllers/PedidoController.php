<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function listPedidos()
    {
    	$users = Pedido::all();
    	return view('partials.listPedidos', compact('users'));
    }

    public function showNewRequestForm()
    {
    	return view('layouts.request');
    }
}
