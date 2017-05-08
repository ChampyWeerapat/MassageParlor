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
    return view('firstpage');
});

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
Route::get('/massager', function () {
    return view('massager');
});

Route::get('/add-employee', function () {
    return view('add-employee');
});
Route::get('voucher', function () {
    return view('createvouchers');
});
Route::resource('create', 'CreateVoucherController');
Route::post('create', 'CreateVoucherController@store');

Route::get('pdf','PDFController@pdf');
