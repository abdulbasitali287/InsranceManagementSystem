<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LienInfo extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $table = "lien_infos";
    // protected $primaryKey = 'id';
    // public function customers(){
    //     return $this->belongsTo(Customer::class);
    // }
}
