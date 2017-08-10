<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    // 产品列表
    public function lists(){
        $this->display('Product/lists');
    }    
    // 添加产品
    public function add(){
        $this->display('Product/add');
    }    
    // 产品分类
    public function category(){
        $this->display('Product/category');
    }
}