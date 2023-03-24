<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Management\CategoryManagement;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return 'Hello World!';
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/post/{id}', function ($id) {
    return $id;
});

//Route::get('/index',[CategoryManagement::class, 'Index']);
Route::resource('management/category',CategoryController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');