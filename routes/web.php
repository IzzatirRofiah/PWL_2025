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

// PRAKTIKUM 4
use App\Http\Controllers\WelcomeController;

Route::get('/hello', [WelcomeController::class, 'hello']);

// PRAKTIKUM 5
use App\Http\Controllers\PageController;

// Route untuk halaman utama
Route::get('/', [PageController::class, 'index']);

// Route untuk halaman about
Route::get('/about', [PageController::class, 'about']);

// Route untuk halaman articles dengan parameter {id}
Route::get('/articles/{id}', [PageController::class, 'articles']);

// Route agar dapat terhubung dengan frontend
use App\Http\Controllers\PhotoController;

Route::resource('photos', PhotoController::class);

// Update Route
Route::resource('photos', PhotoController::class)->only([
        'index', 'show'
       ]);
       Route::resource('photos', PhotoController::class)->except([
        'create', 'store', 'update', 'destroy'
       ]);

// blade.php
Route::get('/greeting', function () {
        return view('hello', ['name' => 'Izzatir']);
        });

// Modif 1
Route::get('/greeting', function () {
	return view('blog.hello', ['name' => 'Izzatir']);
});

// Modif 2
Route::get('/greeting', [WelcomeController::class, 'greeting']);