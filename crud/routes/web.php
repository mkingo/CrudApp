<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\MeasurementController;
use App\Models\Client;
use App\Models\Measurement;
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

Route::get('/', function () {
    return redirect('clients');
});
// Route::get('/measurements', function (Measurement $measurement) {
//     return redirect('measurements');
// });
// Route::get('/measurements/{measurement:client_id}', function (Measurement $measurement) {
//     return view('measurements.show',[MeasurementController::class]);
// });
Route::get('/measurements/create/{measurement:client_id}',function (){
    return redirect('measurements.create');
});

Route::resource('clients',ClientController::class);
Route::resource('measurements',MeasurementController::class);

