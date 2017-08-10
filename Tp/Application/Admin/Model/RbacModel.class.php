<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model{
   public $table='admin_user';
    public $item='auth_item';
    public $role='auth_assignment';
    public $item_child='auth_item_child';
    protected $primaryKey='user_id';
    public $timestamps=false;
    protected $fillable = [
        'user_name','user_pwd'
    ];
    protected $hidden=[

    ];

    public function getUser(){
        return $this->get();
    }
    //获取所有角色
    public function getRole(){
        return DB::table($this->item)->where(['type'=>1])->get();
    }
    //添加用户
    public function addUsers($post){
        $post['user_pwd']=md5($post['user_pwd']);
        $this->fill($post)->save();

    }
    //获取当前用户下的角色
    public function getUserrole($user_id){
        return DB::table($this->role)->where(['user_id'=>$user_id])->get();
    }
    //删除用户
    public function delUser($user_id){
        return $this->find($user_id)->delete();
    }
    //删除当前用户下所有的角色
    public function delUserrole($user_id){
        return DB::table($this->role)->where(['user_id'=>$user_id])->delete();
    }

    //添加当前用户下角色
    public function addUserrole($data,$user_id){
        return DB::table($this->role)->where(['user_id'=>$user_id])->insert($data);
    }
    //查询所有权限
    public function getPower(){
        return $this->select($this->item,'*',['type'=>2]);
    }
    //获取当前角色下的权限
    public function getRolepower($role){
        return DB::table($this->item_child)->where(['parent'=>$role])->get();
    }
    //删除当前角色下权限
    public function delRolepower($parent){
        return DB::table($this->item_child)->where(['parent'=>$parent])->delete();
    }
    //添加当前角色下的权限
    public function addRolepower($data){
        return DB::table($this->item_child)->insert($data);
    }
    //获取控制器名字
    public function getPowerctrl(){
        return DB::table($this->item)->where(['type'=>3])->get();
    }
    //获取控制器下的权限
    public function getCtrlpower($ctrl){
        return DB::table($this->item)->where(['parents'=>$ctrl])->get();
    }
    //添加item下表
    public function addItem($data,$type,$parents=''){
        $data['type']=$type;
        if(empty($parents)&&$parents!=0){
            $data['parents']='-1';
        }else{
            $data['parents']=$parents;
        }
       return DB::table($this->item)->insert($data);
    }
    //删除全部
    public function delAll($newArr){
        foreach($newArr as $k=>$v){
            $id=DB::table($this->item)->select('id')->where(['name'=>$k])->first();
            $parents=$id->id;
            foreach($v as $kk=>$vv){
                DB::table($this->item)->where(['name'=>$vv,'parents'=>$parents])->delete();
            }
        }
    }
    //删除权限
    public function delpower($arr){
        return DB::table($this->item)->where(['name'=>trim($arr[1]),'parents'=>DB::table($this->item)->select('id')->where(['name'=>$arr[0]])->first()->id])->delete();
    }
    //删除角色
    public function delrole($role){
        return DB::table($this->item)->where(['name'=>$role])->delete();
    }

    //通过控制器名字查信息;
    public function getCtrlname($ctrl){
        return $this->select($this->item,'*',['name'=>$ctrl]);
    }
    //删除控制器下的权限  id
    public function delctrlpower($ctrl){
        DB::table($this->item)->where(['parents'=>DB::table($this->item)->select('id')->where(['name'=>$ctrl])->first()->id])->delete();
        DB::table($this->item)->where(['name'=>$ctrl])->delete();
    }

}