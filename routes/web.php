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

Route::get('/', 'FirstPageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Route::get('index', function () {
//     return view('index');
// });

Route::get('/reservation', 'ReserveController@index');

Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/editrole', [
    'middleware' => 'role:owner',
    'uses' => 'EditRoleController@index',
]);
Route::get('/massager', 'MassagistController@index');

Route::get('/add-employee', function () {
    return view('add-employee');
});
// Route::get('voucher', function () {
//     return view('createvouchers');
// });

Route::get('voucher', [
    'middleware' => 'role:owner',
    'uses' => 'CreateVoucherController@index',
]);

Route::get('promotion', function () {
    return view('promotion');
});
Route::resource('create', 'CreateVoucherController');
Route::post('create', 'CreateVoucherController@store');

Route::get('pdf','PDFController@pdf');

Route::get('promotion', function () {
    return view('promotion');
});

Route::get('/add-massager', [
    'middleware' => 'role:owner',
    'uses' => 'MassagistController@index2',
]);

Route::post('/add-massager', [
    'middleware' => 'role:owner',
    'uses' => 'MassagistController@addDB',
]);

Route::post('/reciept','RecieptController@index');


