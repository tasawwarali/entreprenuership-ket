<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'LandingController@index');
