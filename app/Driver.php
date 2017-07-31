<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DeliveryReport;

class Driver extends Model
{
    protected $table = 'drivers';
    protected $fillable = ['name', 'lastname', 'licence', 'medical_certificate', 'observation'];

    public function tickets()
    {
        return $this->hasMany('App\Ticket');
    }

    public function DeliveryReport()
    {
        return $this->belongsTo(DeliveryReport::class, 'id');
    }
}
