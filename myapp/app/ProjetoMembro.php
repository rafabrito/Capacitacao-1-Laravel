<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjetoMembro extends Model
{
    protected $fillable = ['id_membro', 'id_projeto', 'horas_trabalhadas', 'data_alocacao'];
}
