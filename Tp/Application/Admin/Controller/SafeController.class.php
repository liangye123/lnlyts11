<?php
namespace Home\Controller;
use Think\Controller;
class SafeController extends Controller {
    public function safe(){
        $this->display('Safe/safe');
    }
}