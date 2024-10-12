<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'title',
        'manufacturer_part_number',
        'pack_size',
        'image',
    ];

    public function retailers()
    {
        return $this->belongsToMany(Retailer::class, 'product_retailers');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_products');
    }

    public function scrapedData()
    {
        return $this->hasMany(ScrapedData::class);
    }
}
