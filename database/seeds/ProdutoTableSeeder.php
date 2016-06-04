<?php

use Illuminate\Database\Seeder;
use estoque\Models\ProdutoModel;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produto = new ProdutoModel();
        $produto->nome = "Geladeira";
        $produto->descricao = "Geladeira que gela";
        $produto->preco = 1300.99;
        $produto->save();
        
        $produto = new ProdutoModel();
        $produto->nome = "Fogão";
        $produto->descricao = "Fogão que esquenta";
        $produto->preco = 714.57;
        $produto->save();
        
        $produto = new ProdutoModel();
        $produto->nome = "Furadeira";
        $produto->descricao = "Furadeira que Fura";
        $produto->preco = 132.46;
        $produto->save();
    }
}
