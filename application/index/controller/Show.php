<?php
namespace app\index\controller;

use think\Controller;
use think\view;

/**
 * 
 */
class Show extends Controller
{
   public function index($value='')
   {
       return view('index');
   }
   public function butterfly($value='')
   {
       return view();
   }
}

