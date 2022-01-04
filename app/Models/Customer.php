<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'id_customer', 'name', 'phone_cus', 'adress_cus', 'updated_at', 'created_at'];
    protected $table = 'customer';
    protected $primaryKey = 'id';
}
