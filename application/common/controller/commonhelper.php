<?php
/**
 * Created by PhpStorm.
 * User: kyojujor
 * Date: 2018/5/1
 * Time: 16:11
 */

namespace app\common\controller;

use think;
use think\App;

class commonhelper
{
    public static function AdminAlert($str)
    {
        echo '<script>alert('.$str.')</script>';
    }

    public static function CompanyType()
    {
        $arr = [];
        $arr[1]="公司";
        $arr[2]="学校";
        $arr[3]="媒体";

        return $arr;

    }

    public static function upload($strname){

        $app = new App();
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file($strname);
        $Prefx= "/public/uploads/";
        // 移动到框架应用根目录/public/uploads/ 目录下
//        $info = $file->validate(['size'=>15678,'ext'=>'jpg,png,gif'])->move($app->getRootPath() . 'public' . '/' . 'uploads');
        $info = $file->validate(['ext'=>'jpg,png,gif'])->move($app->getRootPath() . $Prefx);
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            //echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
            return $Prefx.$info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
           // echo $info->getFilename();
        }else{
            // 上传失败获取错误信息
            return '';
        }
    }
}