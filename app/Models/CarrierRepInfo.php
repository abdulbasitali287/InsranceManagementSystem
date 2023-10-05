<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarrierRepInfo extends Model
{
    use HasFactory;
    protected $table = 'carrier_rep_infos';
    protected $guarded = [];
    
    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
