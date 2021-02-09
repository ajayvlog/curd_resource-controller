<?php
use App\Http\Controllers\mixed;

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


Route::get('/h','h@index');

Route::resource('mixed', 'mixed');

Route::get('/login','h@login');

Route::post('/chk_login','h@chk_login');

Route::get('/dashboard','h@dashboard')->middleware('auth');


Route::get('/logout','h@logout');



Route::get('/h','h@index');
