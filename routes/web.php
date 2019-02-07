<?php

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
    return view('welcome');
});
Route::get('qr-code', function () {
        $pngImage = QrCode::format('png')->merge('img/uatf.png', 0.3, true)
                        ->size(500)->errorCorrection('H')
                        ->generate('Welcome to kerneldev.com!');
 
        return response($pngImage)->header('Content-type','image/png');
});
