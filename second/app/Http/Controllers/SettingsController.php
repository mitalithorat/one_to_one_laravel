<?php

namespace App\Http\Controllers;
use config;
use Illuminate\Http\Request;


class SettingsController extends Controller
{
    //
    public function index()
    {
        return config('common'.'SITENAME');
    }
}
