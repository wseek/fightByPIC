<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('test');
});
Route::any('wechat','WechatController@server');
Route::any('weixin','WechatController@weixin');

Route::any('test','WechatController@getList');