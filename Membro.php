<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'id_cargo'];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo', 'id_cargo');
    }

    public function projetos() {
    	return $this->belongsToMany('App\Projeto', 'projeto_membros', 'id_membro', 'id_projeto')->withPivot('horas_trabalhadas', 'data_alocacao');
    }

}
