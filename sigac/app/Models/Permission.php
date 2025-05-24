<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Permission extends Model
{
    use HasFactory;

    protected $table = 'permissions';
    public $timestamps = true;

    protected $fillable = [
        'role_id',
        'resource_id',
        'permission',
    ];

    protected function casts(): array
    {
        return [
            'permission' => 'boolean',
        ];
    }

    public $incrementing = false;

    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function resource(): BelongsTo
    {
        return $this->belongsTo(Resource::class);
    }
}