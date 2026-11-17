<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Group::insert([
            ['name' => 'Comunicação', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Contabilidade', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Expansão', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Financeiro', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gerencia/Operações', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Marketing', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'NOVAS', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Presidencia', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Produção', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'RH', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Recepção', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SAF', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SERVIDORES', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Supply', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TEMP', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'TI', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}