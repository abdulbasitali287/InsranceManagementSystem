<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgencyInformation extends Model
{
    use HasFactory;
    protected $table = 'agency_informations';
    protected $guarded = [];
    
    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
