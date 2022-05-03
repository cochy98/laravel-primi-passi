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
    $links = [
        [
            'text'      => 'Home',
            'source'    => 'home',
            'isActive'  => true
        ],
        [
            'text'      => 'Chi siamo',
            'source'    => 'chi_siamo',
            'isActive'  => false
        ],
        [
            'text'      => 'Blog',
            'source'    => 'blog',
            'isActive'  => false
        ],
        [
            'text'      => 'Contatti',
            'source'    => 'contacts',
            'isActive'  => false
        ],
    ];
    return view('home', ['links' => $links]);
})->name('home');

Route::get('/chi-siamo', function () {
    return view('chi-siamo');
})->name('chi_siamo');

Route::get('/blog', function () {
    return view('blog' );
})->name('blog');

Route::get('/contacts', function () {
    return view('contacts' );
})->name('contacts');


