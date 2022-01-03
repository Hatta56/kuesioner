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


// Route::group(['middleware' => 'checkSession'], function () {
//     Route::get('/', function ()    {
//             return view('home');
//     });
// });
Route::get('/',function(){
    return view('welcome');
});
Route::get('/login2',function(){
    return view('auth.login2');
});
Route::get('/register2',function(){
    return view('auth.register2');
});
Route::get('/login','HomeController@login');
Route::get('/isi-kuesioner', 'KuesionerController@isi');
Route::post('/masuk', 'HomeController@masuk');
Route::post('/input-kuesioner', 'KuesionerController@store');
Route::get('/list-dosen', 'KuesionerController@listdosen');
Route::get('/hasil/{id}','KuesionerController@show');
Route::get('/list-kuesioner', 'KuesionerController@showkuesioner');
Route::get('/create-dosen', 'DosenController@create');
Route::post('/insert-dosen', 'DosenController@store');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
