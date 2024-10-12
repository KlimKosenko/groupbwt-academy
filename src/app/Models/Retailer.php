<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailer extends Model
{
    use HasFactory;

    protected $table = 'retailers';

    protected $fillable = [
        'name',
        'url',
        'currency',
        'logo',
        'is_active',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_retailers');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_retailers');
    }

    public function scrapingSessions()
    {
        return $this->hasMany(ScrapingSession::class);
    }
}
