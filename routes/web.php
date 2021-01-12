<?php


use App\Citzien;

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





// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/index','CitzienController@index');
Route::post('/index','CitzienController@create');

Route::get('/destroy/{id}','CitzienController@destroy');
Route::get('/edit/{id}','CitzienController@show');
Route::post('/edit/{id}','CitzienController@update');