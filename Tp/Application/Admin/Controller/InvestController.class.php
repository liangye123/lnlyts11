<?php
namespace Home\Controller;
use Think\Controller;
class InvestController extends Controller {
    public function invest(){
        $this->display('Invest/invest');
    }
}