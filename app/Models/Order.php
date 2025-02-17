<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'status'
    ];

    // ความสัมพันธ์กับตาราง OrderItems
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    // ความสัมพันธ์กับตาราง User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
