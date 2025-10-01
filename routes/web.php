<?php

use Illuminate\Support\Facades\Route;

Route::get('index', function () {
    //return 'Hallo Laravel';
    return view('index');
});
Route::get('about', function () {
    //return 'Ini adalah halaman <b>about</b>';
    return view('about');
});
Route::get('mahasiswa', function () {
    //return 'Ini adalah halaman <b>mahasiswa</b>';
    return view('mahasiswa');
});
Route::get('profil', function () {
    //return 'Ini adalah halaman <b>profile</b>';
    $nama = 'Dery';
    //return view('profil', compact('nama'));
    return view ('profil')->with ('nama', $nama);
});
