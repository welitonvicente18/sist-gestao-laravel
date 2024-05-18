<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'novo 1';
        $fornecedor->site = 'site 2';
        $fornecedor->email = 'email.comasdf';
        $fornecedor->uf = 'DF';
        $fornecedor->save();
    }
}
