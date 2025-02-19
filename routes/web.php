<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () { 
    return 'World'; 
}); 

Route::get('/', function () { 
    return 'Selamat Datang'; 
}); 

Route::get('/about', function () { 
    return 'Nama: Abdillah Agil Arbiansyah NIM : 2341720130'; 
}); 

Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
});

Route::get('/posts/{postId}/comments/{commentId}', function ($postId, $commentId) {
    return 'Pos ke-' . $postId . ' Komentar ke-' . $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

Route::get('/user/{name?}', function ($name = 'John') {
    return 'Nama saya ' . $name;
});

Route::get('/user/profile', function () {
    return 'Ini adalah halaman profil pengguna';
})->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return 'Ini adalah halaman dashboard yang membutuhkan autentikasi';
    });

    Route::get('/settings', function () {
        return 'Ini adalah halaman pengaturan';
    });
});

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return 'Ini adalah halaman daftar pengguna di admin panel';
    });

    Route::get('/posts', function () {
        return 'Ini adalah halaman daftar postingan di admin panel';
    });
});

Route::redirect('/here', '/there');

Route::view('/welcome', 'welcome');
