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


use Illuminate\Support\Facades\Route;

Route::get('/', 'homeController@index');
Route::get('/index', 'homeController@index');
Route::get('/About', 'homeController@About');
Route::get('/Contact', 'homeController@Contact');
Route::get('/verify/{Token}', 'VerifyController@verify')->name('verify');

 Route::post('register/CreatePost', 'Auth\RegisterController@CreatePost');
Route::post('login/LoginPost', 'Auth\LoginController@LoginPost');
Route::post('LogOut', 'Auth\LoginController@LogOut')->name('Logout');


Route::prefix('Suppliers')->group(function () {
    Route::get('/', 'supplierController@index')->name('supplierIndex');
    Route::post('/Create', 'supplierController@CreatePost');
    Route::get('/Details/{id}', 'supplierController@Details');
    Route::get('/Create', 'supplierController@Create');
});

Route::prefix('Manage')->group(function () {
    Route::get('/', 'ManageController@index')->name('Profile');
    Route::post('/PasswordPost', 'ManageController@PasswordPost')->name('PasswordPost');
    Route::get('/Details', 'ManageController@Details')->name('MyDetails');
    Route::get('/ChangePassword', 'ManageController@ChangePassword')->name('ChangePassword');
    Route::post('/', 'ManageController@ChangeProfile')->name('ChangeProfile');
});


Route::prefix('Categories')->group(function () {
    Route::get('/', 'CategoryController@index');
    Route::post('/Create', 'CategoryController@CreatePost');
    Route::get('/Details/{id}', 'CategoryController@Details');
    Route::get('/Create', 'CategoryController@Create');
});

Route::prefix('Orders')->group(function () {
    Route::get('/', 'OrderController@index')->name('orderIndex');
    Route::get('/Purchased/{id}', 'OrderController@Purchased');
    Route::post('/Create', 'OrderController@CreatePost');
    Route::get('/Details/{id}', 'OrderController@Details');
    Route::get('/Create', 'OrderController@Create');
    Route::get('/Ship/{id}', 'OrderController@Ship');
});

Route::prefix('Members')->group(function () {
    Route::get('/', 'MemberController@index')->name('memberIndex');
    Route::get('/Details/{id}', 'MemberController@Details');
    Route::get('/Enabled/{id}', 'MemberController@Enabled');
});

Route::prefix('Souvenirs')->group(function () {
    Route::get('/Create', 'SouvenirController@Create');
    Route::get('/{searchName?}', 'SouvenirController@index')->name('SouvenirIndex');
    Route::post('/Create', 'SouvenirController@CreatePost');
    Route::get('/Details/{id}', 'SouvenirController@Details');
    Route::get('/Delete/{id}', 'SouvenirController@Delete');
    Route::post('/Delete/{id}', 'SouvenirController@DeletePost');
});

Route::prefix('MemberSouvenirs')->group(function () {
    Route::get('/ClearCart', 'ShoppingCartController@ClearCart')->name('ClearCart');
    Route::get('/AddToCart/{id}', 'ShoppingCartController@AddToCart');
    Route::get('/RemoveFromCart/{id}', 'ShoppingCartController@RemoveFromCart');
    Route::get('/Details/{id}', 'MemberSouvenirsController@Details');
    Route::get('/', 'MemberSouvenirsController@index');
    Route::get('/{id?}/{pageIndex?}', 'MemberSouvenirsController@index');


});

Auth::routes();


