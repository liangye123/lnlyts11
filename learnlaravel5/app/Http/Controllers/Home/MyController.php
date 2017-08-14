<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use App\Http\Model\Home\my;
use Illuminate\Support\Facades\Input;


//首页
class MyController extends Controller{

    public function index()
    {
        return view('Home/my/index');
    }
	//资金记录
    public function capital(){
        return view('Home/my/capital');  
    }   
    //投资记录
    public function invest(){
        return view('Home/my/invest');
    }    
    //回款计划
    public function backplan(){
    	return view('Home/my/backplan');
    }   
     //开通第三方
    public function openthird(){
    	return view('Home/my/openthird');
    }
     //开通第三方1
    public function openthird1(){
    	return view('Home/my/openthird1');
    }     
    //充值
    public function recharge(){
    	return view('Home/my/recharge');
    }
     //充值1
    public function recharge1(){
    	return view('Home/my/recharge1');
    }    
    //提现
    public function withdrawals(){
    	return view('Home/my/withdrawals');
    } 
    //提现1
    public function withdrawals1(){
    	return view('Home/my/withdrawals1');
    }       
    //红包
    public function redbag(){
    	return view('Home/my/redbag');
    }      
    //兑换历史
    public function exchange(){
    	return view('Home/my/exchange');
    }       
    //系统信息
    public function system(){
    	return view('Home/my/system');
    }       
    //账户设置
    public function account(){
    	return view('Home/my/account');
    }      
    //新手入门
    public function novice(){
    	return view('Home/my/novice');
    }          
}