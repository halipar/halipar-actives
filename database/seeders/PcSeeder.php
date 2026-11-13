<?php

namespace Database\Seeders;

use App\Models\Pc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PcSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pc::insert([
            [
                'ip' => '192.168.1.10',
                'os' => 'Windows 11 Pro',
                'cpu_name' => 'Intel Core i7-13700K',
                'number_of_cores' => 16,
                'number_of_logical_processors' => 24,
                'cpu_max_clock_speed' => 5400,
                'cpu_data_width' => 64,
                'ram_total' => 32.00,
                'ram_used' => 14.50,
                'ram_free' => 17.50,
                'disk_total' => 1000.00,
                'disk_used' => 450.20,
                'disk_free' => 549.80,
                'gpu_name' => 'NVIDIA GeForce RTX 4070',
                'gpu_memory_total' => 12.00,
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ip' => '192.168.1.15',
                'os' => 'Ubuntu 22.04 LTS',
                'cpu_name' => 'AMD Ryzen 9 5950X',
                'number_of_cores' => 16,
                'number_of_logical_processors' => 32,
                'cpu_max_clock_speed' => 4900,
                'cpu_data_width' => 64,
                'ram_total' => 64.00,
                'ram_used' => 22.10,
                'ram_free' => 41.90,
                'disk_total' => 2000.00,
                'disk_used' => 890.50,
                'disk_free' => 1109.50,
                'gpu_name' => 'AMD Radeon RX 6700 XT',
                'gpu_memory_total' => 12.00,
                'status' => 'Online',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ip' => '192.168.1.50',
                'os' => 'Windows 10 Enterprise',
                'cpu_name' => 'Intel Core i5-10400',
                'number_of_cores' => 6,
                'number_of_logical_processors' => 12,
                'cpu_max_clock_speed' => 4300,
                'cpu_data_width' => 64,
                'ram_total' => 16.00,
                'ram_used' => 11.20,
                'ram_free' => 4.80,
                'disk_total' => 500.00,
                'disk_used' => 420.00,
                'disk_free' => 80.00,
                'gpu_name' => 'Intel UHD Graphics 630',
                'gpu_memory_total' => 4.00,
                'status' => 'Manutenção',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
