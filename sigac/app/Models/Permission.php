<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}