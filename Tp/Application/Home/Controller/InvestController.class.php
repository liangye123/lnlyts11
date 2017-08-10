<?php
namespace Home\Controller;
use Think\Controller;
class InvestController extends Controller {
    //投资
    public function invest(){
        $this->display('Invest/invest');
    }
    //详情
    public function infor(){
        $this->display('Invest/infor');
    }
    //借款       
    public function loan(){
        $this->display('Invest/loan');
    }    
}