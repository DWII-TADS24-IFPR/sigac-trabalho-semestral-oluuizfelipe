<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = [
        'url',
        'descricao',
        'horas_in',
        'status',
        'comentario',
        'horas_out',
        'categoria_id',
        'user_id',
    ];

    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}