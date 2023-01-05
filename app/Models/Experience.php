<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;
    private static $experience;

    public static function newExperience($request)
    {
        self::$experience = new Experience();

        self::$experience->name            = $request->name;
        self::$experience->company         = $request->company;
        self::$experience->starting_year   = $request->starting_year;
        self::$experience->ending_year     = $request->ending_year;
        self::$experience->description     = $request->description;
        self::$experience->save();
    }
}
