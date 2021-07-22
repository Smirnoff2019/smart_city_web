<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// })->middleware(['auth', 'Admin']);

  Auth::routes(['register' => false]);

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
});

//  Route::get('/home', 'HomeController@index')->name('home');

//Административная панель
Route::namespace('admin')->group(function () {
    Route::middleware(['auth', 'Admin'])->group(function () {
        //AdminPanel Route
        Route::get('/admin', 'AdminPanelController@home')
            ->name('admin.layout');
        //Routes for a Points
        Route::get('admin/points/','PointController@index')->name('admin.points.index');
        Route::get('admin/points/create/','PointController@create')->name('admin.points.create');
        Route::post('admin/points/create/','PointController@store')->name('admin.points.store');
        Route::get('admin/points/update/{point}','PointController@edit')->name('admin.points.edit');
        Route::post('admin/points/update/{point}','PointController@update')->name('admin.points.update');
        Route::get('admin/points/show/{point}','PointController@show')->name('admin.points.show');
        Route::delete('admin/points/{point}','PointController@destroy')->name('admin.points.destroy');
        //Routes for a Tags
        Route::get('admin/tags','TagController@index')->name('admin.tags.index');
        Route::get('admin/tags/create','TagController@create')->name('admin.tags.create');
        Route::post('admin/tags/create','TagController@store')->name('admin.tags.store');
        Route::get('admin/tags/update/{tag}','TagController@edit')->name('admin.tags.edit');
        Route::post('admin/tags/update/{tag}','TagController@update')->name('admin.tags.update');
        Route::get('admin/tags/show/{tag}','TagController@show')->name('admin.tags.show');
        Route::delete('admin/tags/{tag}','TagController@destroy')->name('admin.tags.destroy');
        //Routes for a Users
        Route::get('admin/users/','UserController@index')->name('admin.users.index');
        Route::get('admin/users/create/','UserController@create')->name('admin.users.create');
        Route::post('admin/users/create/','UserController@store')->name('admin.users.store');
        Route::get('admin/users/update/{id}','UserController@edit')->name('admin.users.edit');
        Route::post('admin/users/update/{id}','UserController@update')->name('admin.users.update');
        Route::get('admin/users/show/{id}','UserController@show')->name('admin.users.show');
        Route::delete('admin/users/{id}','UserController@destroy')->name('admin.users.destroy');
        //Routes for a PointsTags
        Route::get('admin/pointTags/','PointTagsController@index')->name('admin.pointTags.index');
        //Routes for a maps
        Route::get('admin/maps/','MapController@index')->name('admin.maps.index');
        Route::get('admin/maps/show/{point}','MapController@show')->name('admin.maps.show');
        //Routes for a upload files

    });
});