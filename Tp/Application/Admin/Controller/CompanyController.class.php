<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function index(){
        $this->display('Company/index');
    }    
    // 网站公告
    public function website(){
        $this->display('Company/website');
    }    
    // 媒体报道
    public function media(){
        $this->display('Company/media');
    }    
    // 公司简介
    public function introduce(){
        $this->display('Company/introduce');
    }   
     //管理团队
    public function manage(){
        $this->display('Company/manage');
    }    
    // 合作伙伴
    public function  partner(){
        $this->display('Company/partner');
    }    
    // 团队风采
    public function styles(){
        $this->display('Company/styles');
    }    
    // 法律政策
    public function legalpolicy(){
        $this->display('Company/legalpolicy');
    }    
    // 法律声明
    public function statement(){
        $this->display('Company/statement');
    }    
    // 资费说明
    public function postage(){
        $this->display('Company/postage');
    }   
     // 招贤纳士
    public function personnel(){
        $this->display('Company/personnel');
    }    
    // 联系我们
    public function contact(){
        $this->display('Company/contact');
    }
}