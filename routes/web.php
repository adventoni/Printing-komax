<?php
Auth::routes();
Route::get('/','AppController@index');
route::get('/verify/{token}/{id}', 'Auth\RegisterController@verify_register');

// Route::get('home-admin', function () {
//     return view('app/home_admin');
// })->middleware('auth:admin');

    Route::get('/profil-admin','adminController@profil_admin')->middleware('auth:admin');
    Route::get('/profil-user','adminController@profil_user')->middleware('auth:user1');

    Route::get('/home-admin','adminController@home_admin')->middleware('auth:admin');
    Route::get('/report','adminController@report')->middleware('auth:admin');
    Route::get('/barkode-jepang','adminController@barkod')->middleware('auth:admin');
   
    
    //Route Buyer
    Route::get('/buyer','adminController@buyer')->middleware('auth:admin');
    Route::get('/add-buyer','adminController@create_buyer')->middleware('auth:admin');
    Route::post('/buyer','adminController@store_buyer')->middleware('auth:admin');
    Route::get('/buyer/{id}', 'adminController@show')->middleware('auth:admin');
    Route::get('/buyer/{id}/edit-buyer','adminController@edit_buyer')->middleware('auth:admin');
    Route::put('/buyer/{id}', 'adminController@update_buyer')->middleware('auth:admin');
    Route::delete('/buyer/{id}', 'adminController@destroy')->middleware('auth:admin');

    //Route Bucomp
    Route::get('/bucomp','adminController@bucomp')->middleware('auth:admin');
    Route::get('/add-bucomp','adminController@create_bucomp')->middleware('auth:admin');
    Route::post('/bucomp','adminController@store_bucomp')->middleware('auth:admin');
    Route::get('/bucomp/{id}', 'adminController@showBucomp')->middleware('auth:admin');
    Route::get('/bucomp/{id}', 'adminController@showBucompid')->middleware('auth:admin');
    Route::get('/bucomp/{id}/edit-bucomp','adminController@edit_bucomp')->middleware('auth:admin');
    Route::put('/bucomp/{id}', 'adminController@update_bucomp')->middleware('auth:admin');
    Route::delete('/bucomp/{id}', 'adminController@delete_bucomp')->middleware('auth:admin');

    //Route Company
    Route::get('/company','adminController@company')->middleware('auth:admin');
    Route::get('/add-company','adminController@create_company')->middleware('auth:admin');
    Route::post('/company','adminController@store_company')->middleware('auth:admin');
    Route::get('/company/{id}', 'adminController@showCompanyid')->middleware('auth:admin');
    Route::get('/company/{id}/edit-company','adminController@edit_company')->middleware('auth:admin');
    Route::put('/company/{id}', 'adminController@update_company')->middleware('auth:admin');
    Route::delete('/company/{id}', 'adminController@delete_company')->middleware('auth:admin');

    //Rourte Country
    Route::get('/country','adminController@country')->middleware('auth:admin');
    Route::get('/add-country','adminController@create_country')->middleware('auth:admin');
    Route::post('/country','adminController@store_country')->middleware('auth:admin');
    Route::get('/country/{id}', 'adminController@showCountry')->middleware('auth:admin');
    Route::get('/country/{id}/edit-country','adminController@edit_country')->middleware('auth:admin');
    Route::put('/country/{id}', 'adminController@update_country')->middleware('auth:admin');
    Route::delete('/country/{id}', 'adminController@delete_country')->middleware('auth:admin');

    //Route Item
    Route::get('/item','adminController@item')->middleware('auth:admin');
    Route::get('/add-item','adminController@create_item')->middleware('auth:admin');
    Route::post('/item','adminController@store_item')->middleware('auth:admin');
    Route::get('/item/{id}', 'adminController@showItem')->middleware('auth:admin');
    Route::get('/item/{id}', 'adminController@showItemid')->middleware('auth:admin');
    Route::get('/item/{id}/edit-item','adminController@edit_item')->middleware('auth:admin');
    Route::put('/item/{id}', 'adminController@update_item')->middleware('auth:admin');
    Route::delete('/item/{id}', 'adminController@delete_item')->middleware('auth:admin');

    //Rote Member
    Route::get('/member','adminController@member')->middleware('auth:admin');
    
    Route::get('/dropdown','DropdownController@pilihan')->middleware('auth:admin');
   
    // Route::get('app/aksi/add-buyer', 'AksiController@add_buyer')->name('app/aksi.add_buyer');
    // Route::get('app/buyer', 'AksiController@buyer')->name('app.buyer');
    // Route::post('app/aksi/upload', 'AksiController@upload')->name('app/aksi.upload');   

// Route::group(['middleware' => 'admin'], function(){
//     Route::get('/home-user','adminController@home_user');
//     Route::get('/report-user','adminController@report_user');
//     Route::get('/reprint-barcode-jepang','adminController@reprint_barcode_jepang');
//     Route::get('/trans-barcode-jepang','adminController@trans_barcode_jepang');
// });

Route::get('home-user', function () {
    return view('app/user/home_user');
})->middleware('auth:user1');
Route::get('report-user', function () {
    return view('app/user/report_user');
})->middleware('auth:user1');
Route::get('reprint-barcode-jepang', function () {
    return view('app/user/reprint_barcode_jepang');
})->middleware('auth:user1');
Route::get('trans-barcode-jepang', function () {
    return view('app/user/trans_barcode_jepang');
})->middleware('auth:user1');

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

Route::get('/login', 'AppController@index')->middleware('guest');


Route::post('/kirimdata', 'loginController@login');
Route::get('/keluar', 'loginController@logout');