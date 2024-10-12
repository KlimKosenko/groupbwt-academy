<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapedData extends Model
{
    use HasFactory;

    protected $table = 'scraped_data';

    protected $fillable = [
        'session_id',
        'product_id',
        'title',
        'description',
        'price',
        'images',
        'rating',
        'avg_rating',
    ];

    public function session()
    {
        return $this->belongsTo(ScrapingSession::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
