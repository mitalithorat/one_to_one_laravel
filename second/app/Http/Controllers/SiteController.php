<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use config;
class SiteController extends Controller
{
    //
    function show(){
return config('site.name');
    }
}
