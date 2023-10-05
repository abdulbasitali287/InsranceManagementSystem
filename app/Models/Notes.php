<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    // protected $table ="notes";
    // protected $primaryKey ="id";

    protected $fillable = [
        'customer_email',
        'record_of',
        'date',
        'time',
        'details',
        'todo_list',
        'remainder',
        'custom_payment_id',
        'heading',
        'status',
        'employee_id',
        

        // Add any other fields you want to allow for mass assignment here
    ];

    public function customer()
    {
        return $this->belongsTo(CustomPayment::class, 'customer_email', 'email');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
