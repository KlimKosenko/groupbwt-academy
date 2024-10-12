<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScrapingSession extends Model
{
    use HasFactory;

    protected $table = 'scraping_sessions';

    protected $fillable = [
        'retailer_id',
        'started_at',
        'status',
    ];


    public function retailer()
    {
        return $this->belongsTo(Retailer::class);
    }

    public function scrapedData()
    {
        return $this->hasMany(ScrapedData::class);
    }
}
