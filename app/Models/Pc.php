<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    use HasFactory;

    protected $table ='pcs';

    protected $fillable = [
        'ip',
        'os',
        'cpu_name',
        'number_of_cores',
        'number_of_logical_processors',
        'cpu_max_clock_speed',
        'cpu_data_width',
        'ram_total',
        'ram_used',
        'ram_free',
        'disk_total',
        'disk_used',
        'disk_free',
        'gpu_name',
        'gpu_memory_total',
        'status',
    ];
}
