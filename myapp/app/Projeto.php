<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['nome_projeto', 'data_inicio', 'data_fim'];

    public function membros() {
    	return $this->belongsToMany('App\Membro', 'projeto_membros', 'id_membro', 'id_projeto')->withPivot('horas_trabalhadas', 'data_alocacao');
    }
}
