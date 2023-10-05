<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomPayment extends Model
{
    use HasFactory;
    protected $table ="custom_payments";
    protected $primaryKey ="id";
}
