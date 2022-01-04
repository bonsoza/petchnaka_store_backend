<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id_product', 'quantity', 'product_price', 'id_order', 'updated_at', 'created_at', 'id_customer', 'approve', 'id_user', 'allprice', 'status_delivery', 'id'];
    protected $table = 'order_detail';
    protected $primaryKey = 'id';
}
