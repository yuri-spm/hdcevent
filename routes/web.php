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
Route::get('/events/create', [EventContoller::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventContoller::class, 'show']);
Route::post('/events',[EventContoller::class, 'store']);
Route::get('/events/edit/{id}', [EventContoller::class, 'edit'])->middleware('auth');
Route::put('/events/update/{id}',[EventContoller::class, 'update'])->middleware('auth');
Route::delete('/events/{id}',[EventContoller::class, 'destroy'])->middleware('auth');;


Route::get('/dashboard',[EventContoller::class, 'dashboard'])->middleware('auth');

Route::post('/events/join/{id}',[EventContoller::class, 'joinEvent'])->middleware('auth');