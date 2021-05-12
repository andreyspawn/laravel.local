<?php



use Illuminate\Support\Facades\Route;

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
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/tag/delete/{id}','Admin\TagsController@destroy')->name('tag.destroy');
Route::get('admin/category/delete/{id}','Admin\CategoriesController@destroy')->name('category.destroy');
Route::get('admin/post/delete/{id}','Admin\PostsController@destroy')->name('post.destroy');

Route::group(['prefix' => 'admin','namespace'=>'Admin'], function() {
    Route::get('/','HomeController@index')->name('admin.index');
    Route::resource('category','CategoriesController',['only'=> ['index','create','store']]);
    Route::resource('tag','TagsController',['only'=> ['index','create','store']]);
    Route::resource('post','PostsController',['only'=> ['index','create','store']]);
});



Route::get('/redirect','HomeController@redirect')->name('redir');
