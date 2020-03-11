<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/verified-only', function(Request $request){

    dd('your are verified', $request->user()->name);
})->middleware('auth:api','verified');

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');
Route::post('register', 'Auth\RegisterController@register');
Route::post('/password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::post('/password/reset', 'Auth\ResetPasswordController@reset');
Route::get('/email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
Route::get('/email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');

Route::group(['middleware' => 'auth:api'], function () {
    
Route::get ('/callback/{provider}', 'Auth\SocialAuthController@handleProviderCallback');
});

Route::get('v1/menu/category', 'API\Catagorys\MainMenuCategoryController@index');
Route::get('v1/menu/category/{id}', 'API\Catagorys\MainMenuCategoryController@show');
Route::post('v1/menu/category', 'API\Catagorys\MainMenuCategoryController@create');
Route::put('v1/menu/category/{id}', 'API\Catagorys\MainMenuCategoryController@update');
Route::delete('v1/menu/category/{id}', 'API\Catagorys\MainMenuCategoryController@delete');

Route::get('v1/category/list', 'API\Catagorys\ListAllCategoryController@index');
Route::get('v1/category/list/{id}', 'API\Catagorys\ListAllCategoryController@show');
Route::post('v1/category/list', 'API\Catagorys\ListAllCategoryController@create');
Route::put('v1/category/list/{id}', 'API\Catagorys\ListAllCategoryController@update');
Route::delete('v1/category/list/{id}', 'API\Catagorys\ListAllCategoryController@delete');

Route::get('v1/category/video', 'API\Catagorys\ListVideoInCategoryController@index');
Route::get('v1/category/video/?cat={cat}&pp={pp}&offset={offset}', 'API\Catagorys\ListVideoInCategoryController@show');
Route::post('v1/category/video', 'API\Catagorys\ListVideoInCategoryController@create');
Route::put('v1/category/video/?cat={cat}', 'API\Catagorys\ListVideoInCategoryController@update');
Route::delete('v1/category/video/?cat={cat}', 'API\Catagorys\ListVideoInCategoryController@delete');

Route::get('v1/category/ads', 'API\Catagorys\ListADSInCategoryController@index');
Route::get('v1/category/ads/{cat}', 'API\Catagorys\ListADSInCategoryController@show');
Route::post('v1/category/ads', 'API\Catagorys\ListADSInCategoryController@create');
Route::put('v1/category/ads/{cat}', 'API\Catagorys\ListADSInCategoryController@update');
Route::delete('v1/category/ads/{cat}', 'API\Catagorys\ListADSInCategoryController@delete');
