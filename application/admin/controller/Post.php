<?php
/**
 * Created by PhpStorm.
 * User: aiming3000
 * Date: 2018/3/29
 * Time: 15:29
 */
namespace app\admin\controller;
use think\Controller;

Class Post extends Controller
{
    public function postList(){
        return $this->fetch('postlist');
    }
    public function addpost(){
        return $this->fetch();
    }
}