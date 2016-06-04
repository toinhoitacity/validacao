<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use estoque\Http\Requests;
use estoque\Models\ProdutoModel;

class ProdutoController extends Controller
{
    public function index()
    {
        $products = ProdutoModel::all();        
        return view("produto.index")->with("produtos", $products);
    }
}
