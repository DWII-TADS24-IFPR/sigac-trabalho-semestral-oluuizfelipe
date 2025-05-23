<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaracao extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
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
}