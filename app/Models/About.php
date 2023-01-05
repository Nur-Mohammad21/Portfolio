<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    private static $about;
    private static $imageName;
    private static $directory;
    private static $imageUrl;
    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'about-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newAbout($request)
    {
        self::$about = new About();

        self::$about->title            = $request->title;
        self::$about->name            = $request->name;
        self::$about->email           = $request->email;
        self::$about->degree          = $request->degree;
        self::$about->phone           = $request->phone;
        self::$about->date_of_birth   = $request->date_of_birth;
        self::$about->experience      = $request->experience;
        self::$about->freelance      = $request->freelance;
        self::$about->description   = $request->description;
        self::$about->address         = $request->address;
        self::$about->image           = self::getImageUrl($request->file('image'));
        self::$about->save();
    }
}
