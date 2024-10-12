<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'username',
        'password_hash',
        'role',
        'location',
    ];

    protected $hidden = [
        'password_hash',
        'remember_token',
    ];

    public function retailers()
    {
        return $this->belongsToMany(Retailer::class, 'user_retailers');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'user_products');
    }
}
