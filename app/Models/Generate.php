<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Generate extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_product', 'product_price', 'product_name', 'product_desc', 'created_at', 'updated_at', 'quantity'];
    protected $table = 'product';
    protected $primaryKey = 'id';
}
