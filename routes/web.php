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

Route::group(['prefix' => LaravelLocalization::setLocale(),'namespace'=>'Index'], function()
{
    /*Localizer*/
    $locale = App::getLocale();

    View::share('locale',$locale);
    View::share('title','title_'.$locale);
    View::share('short_desc','short_desc_'.$locale);
    View::share('desc','desc_'.$locale);
    View::share('price','price_'.$locale);
    View::share('title_button','title_button_'.$locale);

    Route::get('/','IndexController@index');
    Route::get('call','IndexController@call')->name('call');
    Route::get('auth/login','AuthController@getLogin')->name('authGetLogin');
    Route::post('auth/login','AuthController@postLogin')->name('authPostLogin');
    Route::get('auth/register','AuthController@getRegister')->name('authGetRegister');
    Route::post('auth/register','AuthController@postRegister')->name('authPostRegister');
    Route::get('services','IndexController@service')->name('services');
    Route::get('tests','IndexController@tests')->name('tests');
    Route::get('keyup-search','IndexController@keydownSearch');
    Route::get('keyup-result','IndexController@keydownResult');
    Route::get('search-button','IndexController@searchButton');
    Route::get('faq','IndexController@faq')->name('faq');
    Route::post('profile-question-save','IndexController@profileQuestionSave')->name('profileQuestionSave');
    Route::get('logout','AuthController@logout')->name('logout');
    Route::post('profile-article-save','IndexController@profileArticleSave')->name('profileArticleSave');
    Route::get('reviews','IndexController@reviews');
    Route::get('reasons','IndexController@reasons')->name('reasons');
    Route::get('lor','IndexController@lor')->name('lor');
    Route::get('nevrolog','IndexController@nevrolog')->name('nevrolog');
    Route::post('send-call-application','IndexController@sendCallApplication');
    Route::get('payment','IndexController@getPayment');
});
Route::group(['prefix' => LaravelLocalization::setLocale(),'namespace'=>'Index','middleware'=>'site'], function()
{
    Route::get('profile','ProfileController@profile')->name('profile');
    Route::post('profile-request-save','ProfileController@profileRequestSave')->name('profile_request_save');
});

Auth::routes();
Route::group(['prefix'=>'system','middleware'=>['auth','admin'],'namespace'=>'System'],function (){
    Route::get('/', 'IndexController@index')->name('main');
    Route::get('/logout', 'IndexController@getSignOut')->name('main');
    Route::resource('carousel', 'CarouselController');
    Route::resource('service', 'ServiceController');
    Route::resource('test-category', 'TestCategoryController');
    Route::resource('test', 'TestController');
    Route::get('faq', 'FaqController@index')->name('faq.index');
    Route::get('faq/create','FaqController@create')->name('faq.create');
    Route::post('faq/store','FaqController@store')->name('faq.save');
    Route::get('faq/{id}/edit','FaqController@edit')->name('faq.edit');
    Route::post('faq/{id}/store','FaqController@update')->name('faq.store');
    Route::post('faq/{id}/delete','FaqController@delete')->name('faq.delete');
    Route::resource('review','ReviewController');
    Route::resource('reasons','ReasonsController');
    Route::resource('lor-content','LorContentController');
    Route::get('application','ApplicationController@index');
    Route::post('/update-form-element/{id}','ApplicationController@updateToArchive');
    Route::post('/delete-form-element/{id}','ApplicationController@destroy');
    Route::get('users','IndexController@users');
    Route::post('delete-form-user/{id}','IndexController@deleteFromUser');
});
