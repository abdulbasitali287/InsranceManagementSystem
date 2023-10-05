<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrentClients extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'current_clients';

    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
