<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function resources(): BelongsToMany
    {
        return $this->belongsToMany(Resource::class, 'permissions')
                    ->withPivot('permission')
                    ->withTimestamps();
    }
}