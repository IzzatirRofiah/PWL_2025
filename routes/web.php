<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// PRAKTIKUM 1
// Modif P1.1
Route::get('/hello', function () {
        return 'Hello World';
});

// Modif P1.2
Route::get('/world', function () {
        return 'World';  
}); 

// Modif P1.3
Route::get('/', function () {
        return 'Selamat Datang';  
});   

// Modif P1.4
Route::get('/about', function () {
        return 'NIM : 2341760010 <br> Nama : Izzatir Rofiah';
});

// PRAKTIKUM 2
// Modif P2.1
Route::get('/user/{name}', function ($name) {
        return 'Nama saya ' . $name;
});

// Modif P2.2
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// Modif P2.3
Route::get('/articles/{id}', function ($id) {
        return "Halaman Artikel dengan ID " . $id;
});

// PRAKTIKUM 3
// Modif P3.1
Route::get('/user/{name?}', function ($name=null) {
        return 'Nama saya '.$name;
});

// Modif P3.2
Route::get('/user/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
});      