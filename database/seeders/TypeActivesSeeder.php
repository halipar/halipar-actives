<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\TypeActive;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeActivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'Eletrônicos' => [
                'Computador',
                'Impressora Térmica',
                'Monitor KDS',
                'Roteador Wi-Fi',
                'Tablet de Pedidos',
                'Máquina de Cartão',
                'Televisão',
                'teste',
            ],
            'Maquinário' => [
                'Fogão Industrial',
                'Fritadeira Elétrica',
                'Chapa',
                'Forno Combinado',
                'Micro-ondas',
                'Liquidificador Industrial',
                'Coifa',
            ],
            'Refrigeração' => [
                'Geladeira Industrial',
                'Freezer Horizontal',
                'Freezer Vertical',
                'Câmara Fria',
                'Balcão Refrigerado',
                'Máquina de Gelo',
                'Ar-Condicionado',
            ],
            'Móveis' => [
                'Mesa',
                'Cadeira',
                'Banqueta',
                'Bancada Inox',
                'Estante Prateleira',
                'Balcão de Atendimento',
                'Lixeira Inox',
            ],
            'Utensílios' => [
                'Panela',
                'Assadeira',
                'Cuba GN',
                'Tábua de Corte',
                'Escorredor',
            ],
            'Limpeza' => [
                'Lavadora de Louça',
                'Lavadora de Alta Pressão',
                'Carro Funcional',
                'Aspirador de Pó',
            ],
            'Segurança' => [
                'Câmera CFTV',
                'Extintor de Incêndio',
                'Luz de Emergência',
                'Sensor de Alarme',
            ],
        ];

        foreach ($data as $categoryName => $types) {
            $category = Category::firstOrCreate(['name' => $categoryName]);

            

            foreach ($types as $type) {
                TypeActive::firstOrCreate([
                    'type'        => $type,
                    'category_id' => $category->id,
                ]);
            }

            
        }
    }
}
