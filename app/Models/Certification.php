<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'certifications';

    public function carrier()
    {
        return $this->belongsTo(Carrier::class);
    }
}
