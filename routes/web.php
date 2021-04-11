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

Route::get('fumigaciones', function () {
    return view('fumigaciones');
});

Route::view('/contact', 'contact', ['name' => 'Taylor']);
// Route::get('/send-email', function(){
//     $details = [
//         'title' => 'Mail from ARwax',
//         'body' => 'This is the testing body'
//     ];

//     \Mail::to('thom@arwax.net')->send(new \App\Media\msgSent($details));
    
// });

Route::get('search', 'MessageController@index');
