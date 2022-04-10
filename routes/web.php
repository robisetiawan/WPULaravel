<?php

use App\Models\PostModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Reere",
        "image" => "sponge.jpg",
        "title" => "About"

    ]);
});


Route::get('/posts', [PostController::class, 'index']);
//halaman single post
Route::get('/posts/{slug}', [PostController::class, 'show']);
// Route::get('/',[PostController::class,'index']);
// Route::get('/about',[PostController::class,'show']);