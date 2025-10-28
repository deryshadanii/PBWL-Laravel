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

Route::get('array', function (){
    //perulangan (loop)
    $nilai_awal = 1;
    while ($nilai_awal <= 5) {
        echo 'Hallo Laravel ' .$nilai_awal . 'x<br>';
        $nilai_awal++;
    }
    echo '<hr>';
    //for
    for ($i=1; $i <= 5 ; $i++) { 
        echo 'Hello world ' . $i . 'x<br>';
    }
});
