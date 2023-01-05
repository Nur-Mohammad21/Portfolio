<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable = ['title'];
    public static function newPortfolio($request)
    {
        Portfolio::create($request->all());
    }
    public function images()
    {
        return $this->hasMany(PortfolioImage::class);
    }
}
