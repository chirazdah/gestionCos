<?php

use Illuminate\Support\Facades\Route;

use App\employers;

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

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/admin/dashboard', 'Admin\AdminController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('dashboard', 'AdminController@index');
    Route::resource('users',"UserController");
    Route::get('createuser',"UserController@createuser")->name('users.createuser');
    Route::post('store',"UserController@store")->name('users.store');
    Route::resource('roles',"RoleController");
    Route::get('createrole',"RoleController@createrole")->name('roles.createrole');
    Route::resource('employer',"EmployerController");
    Route::get('createuser',"EmployerController@createemployer")->name('employer.createemployer');
    Route::post('store',"EmployerController@store")->name('employer.store');
    Route::resource('operation',"OperationController");
    Route::get('createuser',"OperationController@createoperation")->name('operation.createoperation');
    Route::post('store',"OperationController@store")->name('operation.store');
    Route::resource('achatpret',"AchatPretController");
    Route::get('createuser',"AchatPretController@createachatpret")->name('achatpret.createachatpret');
    Route::post('store',"AchatPretController@store")->name('achatpret.store');
});
