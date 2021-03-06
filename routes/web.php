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
Route::get('/profile', function (){
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@indexx');

Route::resource('/perfil', 'PerfilController')->middleware('auth');
Route::get('/changePassword','HomeController@showChangePasswordForm');
Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::get('/profile', 'UserController@profile')->name('user.profile');
Route::patch('/home', 'UserController@update_profile')->name('user.profile.update');

Route::get('users/{id}/delete', [
    'uses' => '\App\Http\Controllers\UserController@delete',
])->name('user.delete');