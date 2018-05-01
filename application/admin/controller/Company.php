<?php
/**
 * Created by PhpStorm.
 * User: kyojujor
 * Date: 2018/4/20
 * Time: 21:20
 */

namespace app\admin\controller;


 use think\Controller;

 class Company extends Controller
{
    public function addcompany()
    {
        return $this->fetch();
    }

//    public function company()
//    {
//
//    }
}