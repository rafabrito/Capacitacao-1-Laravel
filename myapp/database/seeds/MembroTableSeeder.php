<?php

use Illuminate\Database\Seeder;
use App\Membro;

class MembroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::create([
        	'nome' => 'Membro1',
        	'sobrenome' => 'Sobrenome1',
        	'id_cargo' => 2
        ]);

        Membro::create([
        	'nome' => 'Membro2',
        	'sobrenome' => 'Sobrenome2',
        	'id_cargo' => 1
        ]);

        Membro::create([
        	'nome' => 'Membro3',
        	'sobrenome' => 'Sobrenome3',
        	'id_cargo' => 4
        ]);

        Membro::create([
        	'nome' => 'Membro4',
        	'sobrenome' => 'Sobrenome4',
        	'id_cargo' => 3
        ]);

        Membro::create([
        	'nome' => 'Membro5',
        	'sobrenome' => 'Sobrenome5',
        	'id_cargo' => 5
        ]);

        Membro::create([
        	'nome' => 'Membro6',
        	'sobrenome' => 'Sobrenome6',
        	'id_cargo' => 7
        ]);

        Membro::create([
        	'nome' => 'Membro7',
        	'sobrenome' => 'Sobrenome7',
        	'id_cargo' => 6
        ]);
    }
}
