<?php
namespace Home\Controller;
use Think\Controller;
class MyController extends Controller {
    public function index(){
        $this->display('My/index');
    }    
    //资金记录
    public function capital(){
        $this->display('My/capital');
    }    
    //投资记录
    public function invest(){
        $this->display('My/invest');
    }    
    //回款计划
    public function backplan(){
        $this->display('My/backplan');
    }   
     //开通第三方
    public function openthird(){
        $this->display('My/openthird');
    }
     //开通第三方1
    public function openthird1(){
        $this->display('My/openthird1');
    }     
    //充值
    public function recharge(){
        $this->display('My/recharge');
    }
     //充值1
    public function recharge1(){
        $this->display('My/recharge1');
    }    
    //提现
    public function withdrawals(){
        $this->display('My/withdrawals');
    } 
    //提现1
    public function withdrawals1(){
        $this->display('My/withdrawals1');
    }       
    //红包
    public function redbag(){
        $this->display('My/redbag');
    }      
    //兑换历史
    public function exchange(){
        $this->display('My/exchange');
    }       
    //系统信息
    public function system(){
        $this->display('My/system');
    }       
    //账户设置
    public function account(){
        $this->display('My/account');
    }      
    //新手入门
    public function novice(){
        $this->display('My/novice');
    }   
}