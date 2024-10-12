<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRetailer extends Model
{
    use HasFactory;
    protected $table = 'product_retailers';

    protected $fillable = [
        'product_id',
        'retailer_id',
    ];
}
