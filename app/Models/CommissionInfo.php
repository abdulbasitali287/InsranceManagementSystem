<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommissionInfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'commissions_infos';

    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
