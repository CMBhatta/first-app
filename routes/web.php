<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/blog',['uses'=>'BlogController@getBlog']);
// Route::get('/post', function () {
//     return view('post');
// });
// // Route::view('post','/post');
// Route::get('/post/firstpost', function () {
//     return view('firstpost');
// });
// // routes/web.php for homepage

Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('about/service', [HomeController::class,'service']);
Route::get('/about', [HomeController::class,'about']);
Route::get('service/project', [HomeController::class,'projects']);
Route::get('/testimonial', [HomeController::class,'testimonial']);
Route::get('/contact', [HomeController::class,'contact']);

