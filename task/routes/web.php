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

// Route::get('/', function () {
//     return view('/home');
// });

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/', 'PostsController@index')->name('adminindex');


Route::get('/admin/create', 'PostsController@create')->name('admincreate')->middleware(['auth','auth.admin']);
Route::post('/admin/store', 'PostsController@store')->name('adminstore');
Route::get('/admin/show/{id}','PostsController@show')->name('adminshow');


Route::post('/admin/destroy','PostsController@destroy')->name('admindelete')->middleware(['auth','auth.admin']);;

Route::get('/admin','PostsController@dashboard')->name('admindashboard')->middleware(['auth','auth.admin']);;
Route::get('/category/{id}','PostsController@showCat');


Route::post('/admin/update','PostsController@update')->name('adminupdate')->middleware(['auth','auth.admin']);;
Route::get('/admin/edit/{id}','PostsController@edit')->name('adminedit')->middleware(['auth','auth.admin']);;
