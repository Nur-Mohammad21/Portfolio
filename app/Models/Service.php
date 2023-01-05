<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    private static $service;
    public static function newService($request)
    {
        self::$service = new Service();

        self::$service->name          = $request->name;
        self::$service->fontawesome          = $request->fontawesome;
        self::$service->description   = $request->description;
        self::$service->save();
    }
}
