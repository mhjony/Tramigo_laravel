<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Devices extends Controller
{
    //
    function index()
    {
        return DB::table('device')->get();
    }
}
