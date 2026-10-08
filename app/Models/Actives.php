<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actives extends Model
{
    protected $table = 'actives';
    protected $fillable = [
        'sector_id',
        'type_active_id',
        'code',
    ];

    public function sector() {
        return $this->belongsTo(Sector::class);
    }
    public function typeActive(){
        return $this->belongsTo(TypeActive::class);
    }

}
