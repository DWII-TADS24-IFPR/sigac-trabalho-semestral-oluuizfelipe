<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Resource extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'permissions')
                    ->withPivot('permission')
                    ->withTimestamps();
    }
}