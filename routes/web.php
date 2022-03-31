<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetAPIDataController;

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
    return view('welcome');
});
Route::get('/getdata',[GetAPIDataController::class, 'getData']);
Route::get('/ncsdata',[GetAPIDataController::class, 'ncsdata']);
Route::get('/getApplications',[GetAPIDataController::class, 'getApplications']);


