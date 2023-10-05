<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    use HasFactory;
    protected $table = 'carriers';
    protected $guarded = [];

    public function carrierRepinfo()
    {
        return $this->hasMany(CarrierRepInfo::class);
    }
    
    public function currentappointedagents()
    {
        return $this->hasOne(CurrentAppointedAgents::class);
    }
    public function currentclients()
    {
        return $this->hasOne(CurrentClients::class);
    }
    public function agencyinformation()
    {
        return $this->hasOne(AgencyInformation::class);
    }
    public function appointedagents()
    {
        return $this->hasMany(AppointedAgents::class);
    }
    public function certification()
    {
        return $this->hasOne(Certification::class);
    }
    public function commissioninfo()
    {
        return $this->hasOne(CommissionInfo::class);
    }
}
