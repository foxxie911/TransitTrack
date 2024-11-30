<?php

use App\Http\Controllers\BusController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/findcompany', function () {
//     $options = Location::all();
//     return view('findcompany', ['options' => $options]);
// });

Route::view('/searchbus', 'companies', ['companies' => array()]);
Route::post('/searchbus', [CompanyController::class, 'find']);

Route::get('/buses/{company}', [BusController::class, 'stopages']);
