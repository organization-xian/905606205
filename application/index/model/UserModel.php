<?php
namespace app\index\model;
use think\Model;
use think\Db;
/**
 * 
 */
class UserModel extends Model
{
    public function login($username,$password)
    {
        $data = db('users')->where('user',$username)->where('password',$password)->select();
        return $data;
    }
}
