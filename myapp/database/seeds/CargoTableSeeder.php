<?php

use Illuminate\Database\Seeder;
use App\Cargo;

class CargoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Cargo::create([
        	'nome_cargo' => 'Presidente'
        ]);

        Cargo::create([
        	'nome_cargo' => 'Vice-Presidente'
        ]);

        Cargo::create([
        	'nome_cargo' => 'Diretor de Projetos'
        ]);

        Cargo::create([
        	'nome_cargo' => 'Diretor de RH'
        ]);

        Cargo::create([
        	'nome_cargo' => 'Diretor Financeiro'
        ]);

        Cargo::create([
        	'nome_cargo' => 'Membro Consultor'
        ]);

        Cargo::create([
        	'nome_cargo' => 'Diretor de Marketing'
        ]);
    }
}
