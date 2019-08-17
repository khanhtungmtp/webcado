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
Route::get('/', 'HomeController@index')->name('home');
Route::get('register', 'ClientLoginController@getRegister')->name('getRegister');
Route::post('postRegister', 'ClientLoginController@postRegister')->name('postRegister');
Route::get('login', 'ClientLoginController@getLogin')->name('getLogin');
Route::post('postLogin', 'ClientLoginController@postLogin')->name('postLogin');
Route::get('logout', 'ClientLoginController@postLogout')->name('postLogout');
Route::get('/{catParent}/{catChild}', 'NewByCategoryController@index')->name('news.get.by.category');
Route::get('chi-tiet-bai-viet/{id}', 'HomeController@detail')->name('detail');
Route::post('comment', 'HomeController@postComment')->name('comment');
Route::get('danh-muc', 'HomeController@category')->name('category');
Route::get('/dang-nhap-admin', 'AdminController@adminGetLogin')->name('admin.get.login');
Route::post('/dang-nhap-admin', 'AdminController@adminPostLogin')->name('admin.post.login');

Route::group(['prefix'=>'admin', 'middleware' => 'AdminAccess'],function ()
{
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::group(['prefix' => 'category'], function ()
    {
        Route::get('/', 'AdminCategoryController@index')->name('admin.get.list.category');
        Route::get('/create', 'AdminCategoryController@create')->name('admin.get.create.category');
        Route::post('/create', 'AdminCategoryController@store')->name('admin.post.store.category');
        Route::get('/edit/{cat_id}', 'AdminCategoryController@edit')->name('admin.get.edit.category');
        Route::post('/update/{cat_id}', 'AdminCategoryController@update')->name('admin.post.update.category');
        Route::get('/{action}/{cat_id}', 'AdminCategoryController@action')->name('admin.post.action.category');
    });

    Route::group(['prefix' => 'news'], function ()
    {
        Route::get('/', 'AdminNewController@index')->name('admin.get.list.news');
        Route::get('/create', 'AdminNewController@create')->name('admin.get.create.news');
        Route::post('/create', 'AdminNewController@store')->name('admin.post.store.news');
        Route::get('/edit/{new_id}', 'AdminNewController@edit')->name('admin.get.edit.news');
        Route::get('/show/{new_id}', 'AdminNewController@show')->name('admin.get.show.news');
        Route::post('/update/{new_id}', 'AdminNewController@update')->name('admin.post.update.news');
        Route::get('/{action}/{new_id}', 'AdminNewController@action')->name('admin.post.action.news');
    });
    // quan ly user
    Route::group(['prefix' => 'user'], function ()
    {
        Route::get('/', 'AdminUserController@index')->name('admin.get.list.user');
        //        Route::get('/create', 'AdminUserController@create')->name('admin.get.create.user');
        //        Route::post('/create', 'AdminUserController@store')->name('admin.post.store.user');
        //        Route::get('/edit/{id}', 'AdminUserController@edit')->name('admin.get.edit.user');
        //        Route::post('/update/{id}', 'AdminUserController@update')->name('admin.post.update.user');
        Route::get('/{action}/{id}', 'AdminUserController@action')->name('admin.post.action.user');
    });

    // quan ly danh gia rating
    Route::group(['prefix' => 'rating'], function ()
    {
        Route::get('/', 'RatingController@adminRating')->name('admin.get.list.rating');
        Route::get('/{action}/{id}', 'AdminRatingController@action')->name('admin.post.action.rating');
    });

    // quan ly quang cao

    Route::group(['prefix' => 'advert'], function ()
    {
      Route::get('/list','AdvertController@ListAdvert')->name('admin.get.list.advert');
      Route::post('/list','AdvertController@AddAdvert')->name('admin.post.add.advert');
      Route::post('/list/edit','AdvertController@EditAdvert')->name('admin.post.edit.advert');
      Route::post('/list/delete','AdvertController@DeleteAdvert')->name('admin.post.delete.advert');
    });


    Route::get('/dang-xuat', 'AdminController@logoutAdmin')->name('admin.get.logout');

});

Auth::routes();

// chat realtime
Route::get('/chat', 'ChatController@chat')->middleware('auth');
Route::get('/user-login');
