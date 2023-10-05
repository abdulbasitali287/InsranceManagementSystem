<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentAppointedAgents extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'current_appointed_agents';

    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
