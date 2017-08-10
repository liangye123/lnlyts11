<?php
namespace Admin\Controller;
use Think\Controller;
class MemberController extends Controller {
    public function lists(){
        $this->display('Member/lists');
    }
    public function add(){
        $this->display('Member/add');
    }       
    public function del(){
        $this->display('Member/del');
    }    
}