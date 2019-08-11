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

// Route::get('thongtin/{tuoi}/{ten}', function($tuoi, $ten) {
//    return "Hello $ten , $tuoi tuổi";
// });

// Route::get('test', function () {
// 	echo 'Hello Would';
// })->name('Route2');

// Route::get('hoten/{ten}', function ($ten) {
// 	echo 'Ten cua ban la: ' . $ten;
// })->name('Route1');

// Route::get('Goiten', function(){
// 	return redirect()->route('Route2');
// });
// //group

// route::group(['prefix'=>'group'],function(){
// 	route::get('user1',function(){
// 		echo 'user1';
// 	});
// 	route::get('user2',function(){
// 		echo 'user2';
// 	});
// 	route::get('user3',function(){
// 		echo 'user3';
// 	});
// });

Route::get('trangchu',[
	'uses' => 'PageController@gettrangchu'
]);
Route::get('chitiet',[
	'uses' => 'PageController@getchitiet'
]);
Route::get('congty',[
	'uses' => 'PageController@getcongty'
]);
Route::get('ungvien',[
	'uses' => 'PageController@getungvien'
]);

Route::get('chitietungvien',[
	'uses' => 'PageController@getchitietungvien'
]);
Route::get('chitietcongty',[
	'uses' => 'PageController@getchitietcongty'
]);