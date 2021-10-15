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
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return "<h1>Ini Home!</h1>"; });
Route::get('/about', function () {
    echo "<h1 style='text-align: center'><u>Tentang saya</u></h1>"; echo "<p>Ini website aku. <i>Never stop learning</i>. <strong>Jangan lupa tidur</strong>.</p>"; });

Route::get('/salam/{nama}', function ($nama) {
    echo "<h2>Good day, $nama!</h2>"; });

Route::get('/produk/{nama?}/{qty?}', function ($nama = "N/A", $qty = 0) {
     echo "<p>Jual <strong>$nama</strong>. Stok saat ini: $qty</p>"; });

Route::fallback(function () { return "Wah kamu nyasar, turn back!"; });
