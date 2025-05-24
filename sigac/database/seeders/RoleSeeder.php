<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate(['id' => 1], ['nome' => 'Administrador']);
        Role::firstOrCreate(['id' => 2], ['nome' => 'Aluno']);
    }
}