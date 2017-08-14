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
    return view('welcome');
});
//前台 首页
Route::any('index', 'Home\IndexController@index');
//前台 登录
Route::any('login', 'Home\LoginController@index');
//我的账户 个人中心首页
Route::any('my/index', 'Home\MyController@index');
	//资金记录
Route::any('my/capital', 'Home\MyController@capital');
	//投资记录
Route::any('my/invest', 'Home\MyController@invest');
    //回款计划
Route::any('my/backplan', 'Home\MyController@backplan');
	//开通第三方
Route::any('my/openthird', 'Home\MyController@openthird');
     //开通第三方1
Route::any('my/openthird1', 'Home\MyController@openthird1');
    //充值
Route::any('my/recharge', 'Home\MyController@recharge');
     //充值1
Route::any('my/recharge1', 'Home\MyController@recharge1');
    //提现
Route::any('my/withdrawals', 'Home\MyController@withdrawals');
    //提现1
Route::any('my/withdrawals1', 'Home\MyController@withdrawals1');
    //红包
Route::any('my/redbag', 'Home\MyController@redbag');
    //兑换历史
Route::any('my/exchange', 'Home\MyController@exchange');
    //系统信息
Route::any('my/system', 'Home\MyController@system');
    //账户设置
Route::any('my/account', 'Home\MyController@account');
    //新手入门
Route::any('my/novice', 'Home\MyController@novice');
//我要投资 首页
Route::any('invest/index', 'Home\InvestController@index');
//我要投资 详情
Route::any('invest/infor', 'Home\InvestController@infor');


 
 