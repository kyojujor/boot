<?php
/**
 * Created by PhpStorm.
 * User: aiming3000
 * Date: 2018/3/29
 * Time: 15:29
 */
namespace app\admin\controller;
use think\Controller;

Class Index extends Controller
{
    public function index(){
        return $this->fetch();
    }
    public function home(){
        return $this->fetch();
    }
}