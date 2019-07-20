<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'shipper_name',
        'shipper_address',
        'shipper_phone',
        'receiver_name',
        'receiver_address',
        'receiver_phone',
        'receiver_email',
        'total_freight',
        'consignment_no',
        'type',
        'weight',
        'invoice_no',
        'quantity',
        'mode',
        'booking_mode',
        'departure_time',
        'origin_sl',
        'destination_sl',
        'current_sl',
        'status',
        'pickup_date',
        'comments',
    ];
}
