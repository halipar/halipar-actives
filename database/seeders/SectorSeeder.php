<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sector;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sectors = [
            'Cozinha',
            'Salão',
            'Balcão',
            'Estoque',
            'Bar',
            'Caixa',
            'Administração',
            'Área Externa',
           
        ];

        foreach ($sectors as $name) {
            Sector::firstOrCreate(['name' => $name]);
        }
    }
}
