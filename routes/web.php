<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataKomik;
use App\Http\Controllers\Authenticate;

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
Route::get('/', [DataKomik::class, 'index']);
Route::get('/login', [DataKomik::class, 'login'])->name('login');
Route::post('/getlogin', [Authenticate::class, 'getlogin']);

Route::get('/register', [DataKomik::class, 'register'])->name('register');
Route::post('/getregister', [Authenticate::class, 'getregister']);
