<?php

use App\Http\Controllers\EventContrller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CvSkillController;
use App\Http\Controllers\PostJobController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::resource('/skill', CvSkillController::class );
// Route::get('/skillshow',[SkillsController::class,'index'] );
// Route::get('/showdata',[NotificationController::class,'showdata'] );

Route::resource('/post', PostjobController::class );


Route::get('/event', [EventContrller::class,'index'])->name('event.index');