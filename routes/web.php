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
    Route::get('createemployer',"EmployerController@createemployer")->name('employer.createemployer');
    Route::post('store',"EmployerController@store")->name('employer.store');
    Route::resource('operation',"OperationController");
    Route::get('createoperation',"OperationController@createoperation")->name('operation.createoperation');
    Route::post('store',"OperationController@store")->name('operation.store');
    Route::resource('achatpret',"AchatPretController");
    Route::get('createachatpret',"AchatPretController@createachatpret")->name('achatpret.createachatpret');
    Route::post('store',"AchatPretController@store")->name('achatpret.store');
    Route::resource('prime',"PrimeController");
    Route::get('createprime',"PrimeController@createprime")->name('prime.createprime');
    Route::post('store',"PrimeController@store")->name('prime.store');
    Route::resource('paiement',"paiementController");
    Route::get('createpaiement',"paiementController@createpaiement")->name('paiement.createpaiement');
    Route::post('store',"paiementController@store")->name('paiement.store');
    Route::resource('aide',"aideController");
    Route::get('createaide',"aideController@createaide")->name('aide.createaide');
    Route::post('store',"aideController@store")->name('aide.store');
});
