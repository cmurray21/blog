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



Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    $data = [];
    $first = "Christopher";
    $last = "Murray";
    $fullname = $first . " " . $last;
    $email = "christopher@christopher-murray.com";
    $data['email']=$email;
    $data['fullname']=$fullname;
    // These both do the same thing.
    // return view('about')-> with("fullname", $fullname);
    // Variables first and last are NOT accessible from view.
    // return view('about')-> withFullname($fullname)->withEmail($email); 
    // We can also pass in an array 
    return view('about')->with("fullname",$fullname)->withEmail($email); 

});

Route::get('/', function () {
    return view('welcome');
});


