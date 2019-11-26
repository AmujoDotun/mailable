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
});

// Route::get('/contact-us', function() {
//     return view('pages.contact-us');
// });
//requesting the contact us page from the ContactUsController
Route::get('/contact-us', 'ContactUsController@create');
Route::post('/contact-us', 'ContactUsController@store');
