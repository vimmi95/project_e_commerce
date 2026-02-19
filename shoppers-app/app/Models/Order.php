<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'grand_total',
        'payment_method',
        'payment_status',
        'status',
        'currency',
        'shipping _amount',
        'shipping_method',
        'notes'
    ];

    public function user(){
        /* One order belong to a one user and one user can have multiple user*/
        return $this->belongsTo(User::class);
    }

    public function items(){
        /* One order may contain multiple items*/
        return $this->hasMany(OrderItem::class);
    }

    public function address(){
        /* One order belong to a one addres*/
        return $this->hasOne(Address::class);
    }
    
}
