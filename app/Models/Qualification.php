<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;
    private static $qualification;

    public static function newQualification($request)
    {
        self::$qualification = new Qualification();
        self::$qualification->title           =$request->title;
        self::$qualification->name            =$request->name;
        self::$qualification->university      =$request->university;
        self::$qualification->starting_year   =$request->starting_year;
        self::$qualification->ending_year     =$request->ending_year;
        self::$qualification->description     =$request->description;
        self::$qualification->save();
    }

}
