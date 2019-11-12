<?php


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/accessDenied', 'HomeController@accessDenied')->name('accessDenied');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['middleware'=>'auth'],function (){

    Route::get('/userPage', 'UserController@userPage')->name('userPage');


    Route::get('/myAccount/{id?}', 'UserController@myAccount')->name('myAccount');
    Route::get('/updateMyInfo/{id?}', 'UserController@updateMyInfo')->name('updateMyInfo');
    Route::post('/update', 'UserController@update')->name('update');
    Route::get('/deleteMyAccount/{id?}', 'UserController@deleteMyAccount')->name('deleteMyAccount');


    Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
    {
        Route::get('/dashboard', 'UserController@dashboard')->name('dashboard');
        Route::get('/userAccount/{id?}', 'UserController@userAccount')->name('userAccount');
        Route::get('/makeAdmin/{id?}', 'UserController@makeAdmin')->name('makeAdmin');
        Route::get('/makeRegularUser/{id?}', 'UserController@makeRegularUser')->name('makeRegularUser');
        Route::get('/deleteUser/{id?}', 'UserController@deleteUser')->name('deleteUser');
    });
});


