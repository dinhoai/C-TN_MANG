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

Route::get('test', function () {
	echo 'Hello Would';
})->name('Route2');

Route::get('hoten/{ten}', function ($ten) {
	echo 'Ten cua ban la: ' . $ten;
})->name('Route1');

Route::get('Goiten', function(){
	return redirect()->route('Route2');
});
//group

route::group(['prefix'=>'group'],function(){
	route::get('user1',function(){
		echo 'user1';
	});
	route::get('user2',function(){
		echo 'user2';
	});
	route::get('user3',function(){
		echo 'user3';
	});
});
