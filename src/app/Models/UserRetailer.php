<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRetailer extends Model
{
    use HasFactory;
    protected $table = 'user_retailers';

    protected $fillable= [
        'user_id',
        'retailer_id',
    ];
}
