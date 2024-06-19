<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produto = new Produto();
        $produto->nome = 'Geladeira Inox';
        $produto->descricao = 'Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.';
        $produto->peso = 500;
        $produto->unidade_id = 1;
        $produto->save();
    }
}
