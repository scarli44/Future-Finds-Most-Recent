<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'name',
        'description',
        'totalPrice',
        'paymentMethod',
        'shippingFees',
        'discount',
        'shippingNumber',
    ];

    public function orders()
    {
    return $this->hasMany(Order::class);
    }

}
