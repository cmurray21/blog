<?php

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
| ** Best practice: Order from most specific to least specific, because Laravel will stop when there is a match.
*/
Route::get('/contact', 'PagesController@getContact');

Route::get('/about', function () {
    $first = "Christopher";
    $last = "Murray";
    $fullname = $first . " " . $last;

    // return view('about')-> with("fullname", $fullname);
    return view('about')-> withFullname($fullname);

});

Route::get('/', function () {
    return view('welcome');
});


