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
    return view('welcome');
});
Route::get('/gioi-thieu', function () {
    return "Hello <h1>Hello Minh </h1>Minh";
});
Route::get('/lien-he', function () {
    return "Contact us";
});
Route::post('/gioi-thieu', function () {
    return "Hello <h1>Hello</h1>";
});
// route Hiển thị màn hình hello
Route::get('/hello', 'ExampleController@hello')->name('hello');
// route Hiển thị màn hình gioithieubanthan
Route::get('/gioithieubanthan', 'ExampleController@gioithieubanthan')->name('gioithieubanthan');

// biểu mẫu in ấn

Route::get('/admin/danhsachsanpham/print', 'SanPhamController@print')->name('danhsachsanpham.print');
// xuất file excel
Route::get('/admin/danhsachsanpham/excel', 'SanPhamController@excel')->name('danhsachsanpham.excel');
// xuất file pdf
Route::get('/admin/danhsachsanpham/pdf', 'SanPhamController@pdf')->name('danhsachsanpham.pdf');

//
Route::resource('/admin/danhsachsanpham', 'SanPhamController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// khi dung phien ban moi thi dow thu vien laravel.ui
// php
Auth::routes();
// route cho frontend:
Route::get('/', 'Frontend\FrontendController@index')->name('frontend.home');
// route giới thiệu:
Route::get('/gioi-thieu', 'Frontend\FrontendController@about')->name('frontend.about');
// route liên hệ:
Route::get('/lien-he', 'Frontend\FrontendController@contact')->name('frontend.contact');
//  route sendmail:
Route::post('/lien-he/goi-loi-nhan', 'Frontend\FrontendController@sendMailContactForm')->name('frontend.contact.sendMailContactForm');