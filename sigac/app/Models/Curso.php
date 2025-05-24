<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'sigla',
        'total_horas',
        'nivel_id',
        'eixo_id',
    ];

    public function nivel(): BelongsTo
    {
        return $this->belongsTo(Nivel::class);
    }

    public function eixo(): BelongsTo
    {
        return $this->belongsTo(Eixo::class);
    }

    public function turmas(): HasMany
    {
        return $this->hasMany(Turma::class);
    }

    public function alunos(): HasMany
    {
        return $this->hasMany(Aluno::class);
    }

    public function categorias(): HasMany
    {
        return $this->hasMany(Categoria::class);
    }
}