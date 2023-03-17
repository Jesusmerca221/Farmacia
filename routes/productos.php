<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;




Route::get('',[ProductoController::class,'index']);
Route::get('create',[ProductoController::class,'create']); 
Route::get('edit',[ProductoController::class,'edit']);