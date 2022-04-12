<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController2;

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


// Public Pages

Route::get('/', function () {
    return view('welcome');
});





















 Auth::routes();
 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/redirect', [HomeController2::class, 'redirect']);










// Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
// {
    
//         Route::get('/admin_dasboard', function () {
//             return view('admin');
//         });
        
// });