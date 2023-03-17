<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentaController;

Route::get('',[VentaController::class,'index']);
Route::get('create',[VentaController::class,'create']); 
Route::get('edit',[VentaController::class,'edit']);