<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends BaseController {

    public function index(){
        
        $act_list = session('act_list');
        $login = session('Login');
        $logo = M('config')->where("name = 'store_logo'")->find();
        //var_dump($last_log);exit;
        $menu_list = getMenuList($act_list);
        
        $data = [
            'menu_list'=>$menu_list,
            'login'=>$login,
            'logo'=>$logo['value'],
        ];

        $this->assign($data);

        $this->display();

    }

    public function welcome($value='')
    {
        $admin_id = session('admin_id');
        $log = M('admin_log')->where("admin_id = $admin_id")->order('log_id desc')->select();
        $visit = D('visit');
        $today = $visit->today();
        $yesterday = $visit->yesterday();
        $week = $visit->week();
        $month = $visit->month();
        $data = [
            'last_log'=>$log[1],
            'this_log'=>$log[0],
            'total'=>count($log),
            'today'=>$today,
            'yesterday'=>$yesterday,
            'week'=>$week,
            'month'=>$month,
        ];
        $this->assign($data);
        $this->display('welcome');
    }

     

    /**

     * ajax 修改指定表数据字段  一般修改状态 比如 是否推荐 是否开启 等 图标切换的

     * table,id_name,id_value,field,value

     */

    public function changeTableVal(){  

            $table = I('table'); // 表名

            $id_name = I('id_name'); // 表主键id名

            $id_value = I('id_value'); // 表主键id值

            $field  = I('field'); // 修改哪个字段

            $value  = I('value'); // 修改字段值                        

            M($table)->where("$id_name = $id_value")->save(array($field=>$value)); // 根据条件保存修改的数据

    }   

}