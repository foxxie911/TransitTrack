<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'companies', ['companies' => array()]);
Route::post('/', [CompanyController::class, 'find']);

Route::get('/buses/{company}', [BusController::class, 'stopages']);
