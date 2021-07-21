<?php

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

use App\Http\Controllers\EventContoller;

Route::get('/', [EventContoller::class, 'index']); 
Route::get('/events/create', [EventContoller::class, 'create']);
Route::get('/events/{id}', [EventContoller::class, 'show']);
Route::post('/events',[EventContoller::class, 'store']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
