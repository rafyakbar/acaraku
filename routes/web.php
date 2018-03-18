<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('result', function (){
    return view('result');
})->name('hasil');

Route::get('detail', function (){
    return view('detail');
})->name('detail');

Route::get('acaraku', function (){
    return view('acaraku');
})->name('acaraku');

Route::get('buatacara', function (){
    return view('buatacara');
})->name('buatacara');

Route::get('kontak', function (){
    return view('contact');
})->name('kontak');

Route::get('tentang', function (){
    return view('about-us');
})->name('tentang');

Route::get('pengaturan', function (){
    return view('pengaturan');
})->name('pengaturan');

Route::get('mark', function (){
    return view('mark');
})->name('mark');