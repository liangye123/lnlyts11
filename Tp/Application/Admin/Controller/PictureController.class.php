<?php
namespace Admin\Controller;
use Think\Controller;
class PictureController extends Controller {
    public function lists(){
        $this->display('Picture/lists');
    }    
    public function add(){
        $this->display('Picture/add');
    }    
    public function show(){
        $this->display('Picture/show');
    }
}