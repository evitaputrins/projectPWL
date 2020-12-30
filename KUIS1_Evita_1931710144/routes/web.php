<?php


//Route::get('/', function(){
//    return view('home');
//});

// Route::get('/hello', 'WelcomeController@hello');
Route::get('/', 'HomeController@index');
Route::get('/tampil', 'HomeController1@index'); 

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');

// halaman pemesanan
Route::get('/pemesananuser', 'PemesananuserController@pemesananuser');
Auth::routes();
Route::post('/sendpemesanan', 'PemesananuserController@sendpemesanan');
Route::get('/pemesanan', 'PemesananController@pemesanan')->name('pemesanan');
Route::get('/pemesanan/add','PemesananController@add');
Route::post('/pemesanan/update/{id}','PemesananController@update');
Route::get('/pemesanan/edit/{id}','PemesananController@edit');
Route::get('/pemesanan/delete/{id}','PemesananController@delete');
Route::post('/createpemesanan','PemesananController@create');
Route::get('/pemesanan/cetak_pdf', 'PemesananController@cetak_pdf');

// halaman contact dan message
Route::get('/contact', 'ContactController@index');
Auth::routes();
Route::post('/send', 'ContactController@send');
Route::get('/message', 'MessageController@message')->name('message');
Route::get('/message/add','MessageController@add');
Route::post('/message/update/{id}','MessageController@update');
Route::get('/message/edit/{id}','MessageController@edit');
Route::get('/message/delete/{id}','MessageController@delete');
Route::post('/createmessage','MessageController@create');
Route::get('/message/cetak_pdf', 'MessageController@cetak_pdf');


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manage/add','ArticleController@add');
Route::post('/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');
Route::get('/cetak_pdf', 'ArticleController@cetak_pdf');

Route::get('/manageuser', 'UserController@manageuser')->name('manageuser');
Route::get('/manageuser/add','UserController@add');
Route::post('/createuser','UserController@create');
Route::get('/user/edit/{id}','UserController@edit');
Route::post('/user/update/{id}','UserController@update');
Route::get('/user/delete/{id}','UserController@delete');
Route::get('/user/cetak_pdf', 'UserController@cetak_pdf');

