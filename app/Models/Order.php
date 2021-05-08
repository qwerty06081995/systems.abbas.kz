<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_code', 'from_name', 'from_company', 'from_city', 'from_address', 'from_phone',
        'to_name', 'to_company', 'to_city', 'to_address', 'to_phone', 'data_s', 'data_e',
        'type', 'speed', 'payment', 'payment_type', 'comment', 'status', 'courier_id'
    ];

    public $timestamps = false;
}
