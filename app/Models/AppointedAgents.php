<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointedAgents extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'appointed_agents';

    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
