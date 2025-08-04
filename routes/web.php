<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


// All contacts
Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

// New Contact
Route::get('/new', function () {
    return view('newcontact');
})->name('new');


// Favorite
Route::get('/favorite', function () {
    return view('favorite');
})->name('favorite');


//  Groups
Route::get('/groups', function () {
    return view('groups');
})->name('groups');


//  Import
Route::get('/import', function () {
    return view('import');
})->name('import');


//  Export
Route::get('/export', function () {
    return view('export');
})->name('export');


//  Settings
Route::get('/settings', function  (){
    return view('settings');
})->name('settings');


//  Logout
Route::get('/logout', function  (){
    return view('login');
})->name('logout');



// Login endpoint
Route::get('/login', function () {
    return view('login');
})->name('login');
