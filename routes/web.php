<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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


Route::domain('blog.' . env('APP_URL'))->group(function () {
    // Route::get('/', fn () => 'blog');
    Route::get('', [PostController::class, 'index']);

    // Route::resource('posts', PostController::class);
    // Route::get('posts', function () {
    //     return 'Second subdomain landing page';
    // });
    // Route::get('posts/{id}', function ($id) {
    //     return 'Post ' . $id . ' in second subdomain';
    // });
});

Route::get('/', function () {
    return view('welcome');
});
