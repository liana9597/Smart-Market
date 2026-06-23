<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [ //biar langsung nembak ke intinya gaperlu request() lagi
        'id',
        'name',
    ];

    public function products()
    {
        return $this->hasMany(Product::class); //one to many
    }
}
