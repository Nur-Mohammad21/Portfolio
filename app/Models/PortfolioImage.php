<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioImage extends Model
{
    use HasFactory;
    private static $imageName;
    private static $directory;
    private static $imageUrl;
    private static $newImage;
    public static function uploadImageSave($request,$image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'portfolio-image/';
        $image->move(self::$directory,self::$imageName);
        self::$imageUrl = (self::$directory.self::$imageName);

        self::$newImage = new PortfolioImage();
        self::$newImage->portfolio_id = $request->portfolio_id;
        self::$newImage->image = self::$imageUrl;
        self::$newImage->save();
    }
    public function portfolio()
    {
        return $this->belongsTo(Portfolio::class);
    }
}
