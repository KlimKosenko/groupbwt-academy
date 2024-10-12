<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Retailer;
use App\Models\ScrapedData;
use App\Models\ScrapingSession;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $retailers = Retailer::factory()->count(10)->create();
        $daysInYear = 365;
        for ($day = 0; $day < $daysInYear; $day++) {
            $scrapedDataForDay = [];
            foreach ($retailers as $retailer) {
                $session = ScrapingSession::create([
                    'retailer_id' => $retailer->id,
                    'started_at' => now()->subDays($daysInYear - $day),
                    'status' => 'completed',
                ]);
                $products = Product::factory()->count(1000)->create();
                foreach ($products as $product) {
                    $scrapedDataForDay[] = [
                        'session_id' => $session->id,
                        'product_id' => $product->id,
                        'title' => $product->title,
                        'description' => $product->title . ' - ' . $product->pack_size . ' description.',
                        'price' => rand(10, 500),
                        'images' => json_encode([$product->image, $product->image]),
                        'rating' => rand(1, 5),
                        'avg_rating' => rand(10, 50) / 10,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                    break;
                }
            }
            ScrapedData::insert($scrapedDataForDay);
        }
    }
}
