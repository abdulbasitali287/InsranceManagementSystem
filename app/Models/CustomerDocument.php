<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDocument extends Model
{
    use HasFactory;

    protected $fillable = [
       'customer_id', 'file_name', 'file_path'
    ];


    public function customPayment()
    {
        return $this->belongsTo(CustomPayment::class, 'custom_payment_id');
    }
}
