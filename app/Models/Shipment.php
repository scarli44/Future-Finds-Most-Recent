<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $table = 'shipment';

    protected $fillable = [
      'timeOfDeparture',
      'timeOfArrival',
      'hasArrived',
        'delayed',
        'statusPending',
    ];
}
