<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha',
        'user_id',
        'curso_id',
        'turma_id',
    ];

    protected function casts(): array
    {
        return [
            'senha' => 'hashed',
        ];
    }
}