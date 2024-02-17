<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\FrontEndController;

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
Route::get('cache-clear', function () {
    Artisan::call('cache:clear');
    return response()->json(['message' => 'Cache Clear Successfully'], 200);
});


Route::get('/',[FrontEndController::class,'index'])->name('home');
Route::get('/mession-vision',[FrontEndController::class,'messionVission'])->name('mission-vision');
Route::get('/organogram-of-iqac',[FrontEndController::class,'organogramOfIqac'])->name('organogram-of-iqac');
Route::get('/members/{type}',[FrontEndController::class,'members'])->name('members');
Route::get('/event',[FrontEndController::class,'event'])->name('event');
Route::get('/event/{id}',[FrontEndController::class,'eventDetails'])->name('event_details');
Route::get('/gallery',[FrontEndController::class,'gallery'])->name('gallery');
Route::get('/resource',[FrontEndController::class,'resource'])->name('resource');
Route::get('/contact',[FrontEndController::class,'contact'])->name('contact');


