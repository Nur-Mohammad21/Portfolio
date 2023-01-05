<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    private static $profile;
    private static $imageName;
    private static $directory;
    private static $imageUrl;
    private static $fileName;
    private static $fileUrl;
    public static function getImageUrl($image)
    {
        self::$imageName = $image->getClientOriginalName();
        self::$directory = 'profile-image/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function getFileUrl($file)
    {
        self::$fileName = $file->getClientOriginalName();
        self::$directory = 'cv/';
        $file->move(self::$directory, self::$fileName);
        self::$fileUrl = self::$directory. self::$fileName;
        return self::$fileUrl;
    }
    public static function newProfile($request)
    {
        self::$profile = new Profile();

        self::$profile->name            = $request->name;
        self::$profile->qualification   = $request->qualification;
        self::$profile->cv              = self::getFileUrl($request->file('cv'));
        self::$profile->image           = self::getImageUrl($request->file('image'));
        self::$profile->save();
    }

}
