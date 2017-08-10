<?php
namespace Admin\Controller;
use Think\Controller;
class CommentController extends Controller {
    public function feedback(){
        $this->display('Comment/feedback');
    }
}