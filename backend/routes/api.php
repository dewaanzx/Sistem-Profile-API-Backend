<?php

use App\Http\Controllers\Api\Agama36Controller;
use App\Http\Controllers\api\Detaildata36Controller;
use App\Http\Controllers\api\User36Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

route::resource('/agama36', Agama36Controller::class);

route::resource('/detaildata36', DetailData36Controller::class);

route::resource('/user36', User36Controller::class);
Route::put('/user36/update/image/{id}', [User36Controller::class, 'editimage'])->name('user36.editimage');
Route::put('/user36/update/password/{id}', [User36Controller::class, 'editpassword'])->name('user36.editpassword');

// detail
route::resource('/detaildata36', Detaildata36Controller::class);
