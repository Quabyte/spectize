<?php

Route::get('/', function () {
    return view('frontend.index');
});

Route::resource('/cpu', 'CpuController');
Route::resource('/gpu', 'GpuController');
Route::resource('/laptop', 'LaptopController');
Route::resource('/smartphone', 'SmartphoneController');