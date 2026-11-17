<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pc extends Model
{
    use HasFactory;

    protected $table = 'pcs';

    protected $fillable = [
        'admin_server',
        'group_id',
        'device_name',
        'inventory_status',
        'motherboard',
        'cpu',
        'memory_mb',
        'storage_details',
        'total_gb',
        'available_gb',
        'video_adapter',
        'network_controller',
        'sound_card',
        'optical_drive',
        'monitor',
        'ip_address',
        'ipv6_address',
    ];

    /**
     * Relacionamento com a model Group.
     */
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}