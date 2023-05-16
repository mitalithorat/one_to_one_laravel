<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use config;

class NameController extends Controller
{
    //
    function show(){
        return config('name.name');
    }
}
