<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function funcionario(){
        return $this->morphOne(Funcionario::class, 'funcionarioable');
    }
}
