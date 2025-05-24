<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Declaracao extends Model
{
    use HasFactory;

    protected $fillable = [
        'hash',
        'data',
        'aluno_id',
        'comprovante_id',
    ];

    protected function casts(): array
    {
        return [
            'data' => 'datetime',
        ];
    }

    public function aluno(): BelongsTo
    {
        return $this->belongsTo(Aluno::class);
    }

    public function comprovante(): BelongsTo
    {
        return $this->belongsTo(Comprovante::class);
    }
}