<?php

namespace App\Models;
use App\Http\Controllers\ProductController;
use Illuminate\Database\Eloquent\Model;
class Product extends Model
{
    /**
     * @var mixed|string
     */
    public mixed $name;
    /**
     * @var mixed|string
     */
    protected $fillable = [
        'name',
        'description',
        'totalPrice',
        'paymentMethod',
        'price',
        'size',
        'additionalInfo',
    ];

    public function printProduct(){
        return "this produdct";
    }

    public function user(){
    return $this->belongsToMany(User::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function shipment(){
        return $this->belongsTo(Shipment::class);
    }


}

