<?php
namespace Home\Controller;
use Think\Controller;
class RegisterController extends Controller {
    public function register(){
        $this->display('register/register');
    }
    public function register1(){
        $this->display('register/register1');
    }    
}