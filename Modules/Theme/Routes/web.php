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

use Modules\Theme\Http\Controllers\FaqController;

Route::get('/', 'FrontendController@index');
Route::get('/trang-chu', 'FrontendController@index');
Route::get('/tim-kiem', 'FrontendController@search')->name('search');
Route::get('/bai-viet/{postId}', 'FrontendController@showPost')->name('post.show');
Route::get('/hoi-dap', 'FrontendController@faq')->name('faq');
Route::post('/', [FaqController::class, 'submitQuestion'])->name('faq.submit');


Route::get('ajaxFE/{action}', 'AjaxFrontEntController@index');


Route::get('/{slug}.html', 'FrontendController@getPage');


Route::group(['prefix' => '{slugParent}'], function () {
    Route::get('/', 'FrontendController@getListParents')->name('slugParent.getListParents');
    Route::get('/{slugDetail}.html', 'FrontendController@getDetail')->name('slugDetail.getDetail');
});
