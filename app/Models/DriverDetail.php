<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverDetail extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $primaryKey = ['id'];
    // protected $fillable = ['driver_name'];

    public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
}
