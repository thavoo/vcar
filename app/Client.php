<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DeliveryReport;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = ['name', 'email', 'phone', 'id_card', 'address', 'state', 'city'];

    public function DeliveryReport()
    {
        return $this->belongsTo(DeliveryReport::class, 'id');
    }
}
