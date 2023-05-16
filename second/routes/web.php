<?php

use App\Http\Controllers\NameController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\testController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PostController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/{name}', function ($name) {
//     return view('about',['name'=>$name]);
// });
// Route::view("about","/about");
// Route::get('/{name}', function ($name) {
//     return view('welcome',['name'=>$name]);
// });
// Route::view("anchor","/anchor");

//redirect
// Route::get('/', function () {
//     return redirect('about');
// });
// Route::get('users',[UserController::class,'show']);
// Route::get('tests/{id}',[testController::class,'show']);
//Route::get('config-value',[SettingsController::class,'index']);
// Route::get('name',[NameController::class,'show']);
// Route::get('site',[SiteController::class,'show']);
// Route::resource('posts','PostController');  