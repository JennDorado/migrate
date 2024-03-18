<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');

});

Route::get('Soldier.create', [SoldierController::class,'create'])->name('Soldier.create');
Route::post('Soldier.store', [SoldierController::class,'store'])->name('Soldier.store');

Route::get('Barracks.create', [BarrracksController::class,'create'])->name('Barracks.create');
Route::post('Barracks.store', [BarracksController::class,'store'])->name('Barracks.store');

Route::get('Body.create', [BodyController::class,'create'])->name('Body.create');
Route::post('Body.store', [BodyController::class,'store'])->name('Body.store');

Route::get('Company.create', [CompanyController::class,'create'])->name('Company.create');
Route::post('Company.store', [CompanyController::class,'store'])->name('Company.store');

Route::get('Services.create', [ServicesController::class,'create'])->name('Services.create');
Route::post('Services.store', [ServicesController::class,'store'])->name('Services.store');
