<?php

use Illuminate\Database\Seeder;
use App\Projeto;

class ProjetoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Projeto::create([
        	'nome_projeto' => 'Projeto1',
        	'data_inicio' => '2019-02-12',
        	'data_fim' => '2019-03-15'
        ]);

        Projeto::create([
        	'nome_projeto' => 'Projeto2',
        	'data_inicio' => '2019-03-14',
        	'data_fim' => '2019-04-18'
        ]);

        Projeto::create([
        	'nome_projeto' => 'Projeto3',
        	'data_inicio' => '2019-05-01',
        	'data_fim' => '2019-08-09'
        ]);
    }
}
