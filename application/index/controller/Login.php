<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\UserModel;
use think\Request;
use think\Session;
class Login extends Controller{

    public function index($value='')
    {
        $user = new UserModel;
        $username = input('post.username');
        $password = input('post.password');
        $result = $user->login($username,$password);
        if(!empty($result)){
            session('user',$result);
            return $this->redirect('home/index');
        }
        return view('index');
    }
}