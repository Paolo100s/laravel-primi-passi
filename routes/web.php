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

    $name = 'Paolo';
    $lastname = 'Centoscudi';

    return view('home', compact('name', 'lastname'));
})-> name('home');

Route::get('/other_page', function(){

    $wow = 'WOW!';
    
    return view('other.other_page', compact('wow'));
})->name('other_page');
