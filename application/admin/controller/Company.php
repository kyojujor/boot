<?php
/**
 * Created by PhpStorm.
 * User: kyojujor
 * Date: 2018/4/20
 * Time: 21:20
 */

namespace app\admin\controller;


use app\common\controller\commonhelper;
use think\Controller;
use think\Request;

class Company extends Controller
{
    private $model;

    public function __construct()
    {
        $this->initModel();

        parent::__construct();
    }

    public function initModel()
    {
        $this->model = [];
        $this->model['id'] = 0;
        $this->model['name'] = '';
        $this->model['type'] = '';
        $this->model['logo'] = '';
    }

    public function DealCompany($data)
    {
        if ($this->model['id'] > 0) {
            $res = db('company')->update($data);
        } else {
            unset($this->model['id']);
            $res = db('company')->insert($data);
        }
        if ($res > 0)
            return $res;
        else
            return 0;
    }

    public function addcompany(Request $request)
    {
        header('Access-Control-Allow-Origin: *');
        if ($request->post()) {
            $this->model['name'] = input('post.name/s');
            $this->model['type'] = input('post.type/d');
            $this->model['logo'] = commonhelper::upload('lotmgo');
            $res = $this->DealCompany($this->model);
            return redirect('/admin/company/companylist');
        }

//        var_dump(input('post.'));
        $this->initModel();
        $this->assign('model', $this->model);
        $this->assign('typearr', commonhelper::CompanyType());
        return $this->fetch("company/company");
    }

    public function companylist()
    {
        return $this->fetch();
    }


}