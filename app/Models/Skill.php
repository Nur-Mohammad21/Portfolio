<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;
    private static $skill;
    public static function newSkill($request)
    {
        self::$skill = new Skill();

        self::$skill->name = $request->name;
        self::$skill->percentage = $request->percentage;
        self::$skill->color = $request->color;
        self::$skill->save();

    }
}
