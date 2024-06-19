<?php

namespace Database\Seeders;

use App\Models\Unidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $unidade = new Unidade();
        $unidade->unidade = '2';
        $unidade->descricao = 'Teste 2';
        $unidade->save();
    }
}
