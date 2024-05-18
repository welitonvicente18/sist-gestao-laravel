<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory as factory;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteContato();
        // $contato->create([
        //     'nome' => 'Nome do Contato',
        //     'telefone' => '123456789',
        //     'email' => 'nLJGt@example.com',
        //     'motivo_contato' => 1,
        //     'mensagem' => 'Mensagem do Contato'
        // ]);

        SiteContato::factory()->count(100)->create();
    }
}
