<?php
namespace app\index\controller;
use think\Controller;
use think\view;
/**
 * 
 */
class Home extends Controller
{
    
    public function index($value='')
    {
        $u_user = session('user');
        if(empty($u_user)){
            return $this->redirect('login/index');
        }
        // printf($u_user);
        $this->assign('user',$u_user[0]);
        return view('pic');
    }
    public function pic($value='')
    {
        $u_user = session('user');
        if(empty($u_user)){
            return $this->redirect('login/index');
        }
        $this->assign('user',$u_user[0]);
        return view('pic');
    }
}
