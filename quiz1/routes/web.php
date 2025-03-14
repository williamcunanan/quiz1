<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello/{name}', function($name) {

    return 'hi ' . $name; // It will say "hi" followed by whatever name you typed (like "hi John")

});
Route::resource('/inventory', InventoryController::class);
