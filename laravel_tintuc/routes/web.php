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

// Route::get('/', function () {
// 	DD(DB::table('nems')->get());
//     return view('news', ['data'=>DB::table('nems')->get()]);
// });

Route::get('/login', 'NewsController@getLogin');
Route::post('/login', 'NewsController@postLogin');
Route::get('/logout', 'NewsController@getLogout');

Route::group(['prefix'=>'admin', 'middleware' =>'auth'],function() {
	Route::get('/home', 'MyController@home');
	Route::group(['prefix'=>'staff'],function(){
		Route::get('list', 'MyController@staff');
		Route::get('add', 'MyController@staff_add');
		Route::post('add', 'MyController@staff_add_post');
		Route::get('edit/id', 'MyController@staff_edit');
		Route::post('edit/{id}', 'MyController@staff_edit_post');
		Route::post('delete', 'MyController@staff_delete');
		Route::post('filter', 'MyController@staff_filter');
	});
});





Route::get('/', 'NewsController@home');

Route::get('/about', 'NewsController@about');
Route::get('/tin-tuc', 'NewsController@tintuc');
Route::get('/the-gioi', 'NewsController@thegioi');
Route::get('/covid', 'NewsController@covid');
Route::get('/trong-nuoc', 'NewsController@trongnuoc');
Route::get('/khoa-hoc-va-cong-nghe', 'NewsController@khoahoc');
Route::get('/phap-luat', 'NewsController@phapluat');
Route::get('/giao-duc', 'NewsController@giaoduc');
Route::get('/showbiz', 'NewsController@showbiz');
Route::get('/thoi-su', 'NewsController@thoisu');
Route::get('/test', 'MyController@index');
Route::get('/tim-kiem', 'NewsController@search');
route::get('chi-tiet/{id}', function($id){
	
	return View('page.detail', ['data'=>DB::table('nems as a')->join('page_ori as b', 'a.id_page_lk', '=', 'b.id_page')
        ->selectRaw('a.*,b.*')->where('a.idnew', $id)->get()]);
});
 

