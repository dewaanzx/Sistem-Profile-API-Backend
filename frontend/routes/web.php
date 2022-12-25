<?php

use App\Http\Controllers\Agama36Controller;
use App\Http\Controllers\Auth36Controller;
use App\Http\Controllers\User36Controller;
use App\Http\Controllers\Detaildata36Controller;
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

Route::get('/', function () {
    return view('welcome', [
        'page' => "Home"
    ]);
})->middleware('auth');


//Authentication
Route::get('/login36', [Auth36Controller::class, 'login'])->name('login');
Route::get('/register36', [Auth36Controller::class, 'register'])->name('auth36.register');
Route::get('/logout36', [Auth36Controller::class, 'logout'])->name('auth36.logout');

Route::post('/login36', [Auth36Controller::class, 'loginP'])->name('auth36.loginP');
Route::post('/register36', [Auth36Controller::class, 'registerP'])->name('auth36.registerP');

Route::middleware('auth')->group(function () {
    
//Agama
Route::resource('/agama36', Agama36Controller::class)->middleware('admin');

//My Profile
Route::get('/myprofile36', [User36Controller::class, 'myprofile'])->name('user36.myprofile');
Route::put('/myprofile36/edit/password/{id}', [User36Controller::class, 'editpassword'])->name('user36.editpassword');
Route::put('/myprofile36/edit/image/{id}', [User36Controller::class, 'editimage'])->name('user36.editimage');

//User
Route::resource('/user36', User36Controller::class)->middleware('admin');

//Detail
Route::resource('/detaildata36', Detaildata36Controller::class);

});