<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    $patients = [
        ["firstname" => "Juan", "lastname" => "DelaCruz", "id" => "1"],
        ["firstname" => "John", "lastname" => "Doe", "id" => "2"],
        ["firstname" => "Mario", "lastname" => "Doe", "id" => "3"],
        ["firstname" => "Luigi", "lastname" => "Doe", "id" => "4"],
    ];

 return view('home.index', ["greetings" => "hello", "hi" => $patients]);
});

Route::get('/home/new', function () {
    return view('/home.new');
});

Route::get('/home/{id}', function ($id) {
// fetch records with id
 return view('home.show', ["id" => $id]);
}); 