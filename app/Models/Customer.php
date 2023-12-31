<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Customer extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $primaryKey = "cus_id";
    protected $fillable = [
        'name',
        'cus_or_lead',
        'account_name',
        'eft',
        'cus_type',
        'referral_src',
        'status',
    ];

    public function payment_detail(){
        return $this->hasMany(PaymentDetail::class,'customer_id');
    }

    public function driver_detail(){
        return $this->hasMany(DriverDetail::class,'customer_id');
    }

    public function physical_address(){
        return $this->hasMany(PhysicalAddress::class,'customer_id');
    }

    public function mailing_address(){
        return $this->hasMany(MailingAddress::class,'customer_id');
    }

    public function work_bussiness_address(){
        return $this->hasMany(WorkBussinessAddress::class,'customer_id');
    }

    public function insured_items(){
        return $this->hasMany(InsuredItem::class,'customer_id');
    }
    
    public function lien_info(){
        return $this->hasMany(LienInfo::class,'customer_id');
    }

    public function premium_calculation(){
        return $this->hasMany(PremiumCalculation::class,'customer_id');
    }
    
    public function date_and_amount(){
        return $this->hasMany(DatesAndAmount::class,'customer_id');
    }
    
    // public function customer_other_details(){
    //     return $this->hasMany(CustomerOtherDetail::class,'customer_id');
    // }
}