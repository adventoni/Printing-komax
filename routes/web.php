<?php

Route::get('/','AppController@index');
route::get('/verify/{token}/{id}', 'Auth\RegisterController@verify_register');


Route::group(['middleware' => 'admin'], function(){
Route::get('/admin','adminController@dashboard');
Route::get('/report','adminController@report');
Route::get('/barkode-jepang','adminController@barkod');
Route::get('/buyer','adminController@buyer');
Route::get('/bucomp','adminController@bucomp');
Route::get('/company','adminController@company');
Route::get('/country','adminController@country');
Route::get('/item','adminController@item');
Route::get('/member','adminController@member');
Route::get('/add-buyer','adminController@add_buyer');
Route::get('/edit-buyer','adminController@edit_buyer');
Route::get('/add-bucomp','adminController@add_bucomp');
Route::get('/edit-bucomp','adminController@edit_bucomp');
Route::get('/add-company','adminController@add_company');
Route::get('/edit-company','adminController@edit_company');
Route::get('/add-country','adminController@add_country');
Route::get('/edit-country','adminController@edit_country');
Route::get('/add-item','adminController@add_item');
Route::get('/edit-item','adminController@edit_item');
Route::get('/add-member','adminController@add_member');
Route::get('/edit-member','adminController@edit_member');
});



Route::get('home-user', function () {
    return view('app/user/home_user');
});
Route::get('report-user', function () {
    return view('app/user/report_user');
});
Route::get('reprint-barcode-jepang', function () {
    return view('app/user/reprint_barcode_jepang');
});
Route::get('trans-barcode-jepang', function () {
    return view('app/user/trans_barcode_jepang');
});

// Route::get('/bucomp', function () {
//     return view('app/bucomp');
// });
// Route::get('/company', function () {
//     return view('app/company');
// });
// Route::get('/country', function () {
//     return view('app/country');
// });
// Route::get('/item', function () {
//     return view('app/item');
// });
// Route::get('/member', function () {
//     return view('app/member');
// });

// Route::get('/add-buyer', function () {
//     return view('app/aksi/add_buyer');
// });
// Route::get('/edit-buyer', function () {
//     return view('app/aksi/edit_buyer');
// });
// Route::get('/add-bucomp', function () {
//     return view('app/aksi/add_bucomp');
// });
// Route::get('/edit-bucomp', function () {
//     return view('app/aksi/edit_bucomp');
// });
// Route::get('/add-company', function () {
//     return view('app/aksi/add_company');
// });
// Route::get('/edit-company', function () {
//     return view('app/aksi/edit_company');
// });
// Route::get('/add-country', function () {
//     return view('app/aksi/add_country');
// });
// Route::get('/edit-country', function () {
//     return view('app/aksi/edit_country');
// });
// Route::get('/add-item', function () {
//     return view('app/aksi/add_item');
// });
// Route::get('/edit-item', function () {
//     return view('app/aksi/edit_item');
// });
// Route::get('/add-member', function () {
//     return view('app/aksi/add_member');
// });
// Route::get('/edit-member', function () {
//     return view('app/aksi/edit_member');
// });

Route::get('/login', function () {
    return view('login/form_login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
