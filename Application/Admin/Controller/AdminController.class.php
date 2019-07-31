<?php

/**

 * 

 * @authors Your Name (you@example.org)

 * @date    2017-09-04 14:39:24

 * @version $Id$

 */

namespace Admin\Controller;

use Think\Controller;

class AdminController extends BaseController {



	//登录

	public function login()

	{

        if(session('?admin_id') && session('admin_id')>0){

             $this->error("您已登录",U('Admin/Index/index'));

        }	

		if (IS_POST) {

		/*	$captcha = check_verify(I('post.captcha'),1);

			if (!$captcha) {

				$this->error('验证码错误','',1);exit;

			}*/

			$data = I('post.');

			$data['password'] = hash('sha256',$data['password']);

			$result = M('admin')->join('__ADMIN_ROLE__ ON __ADMIN__.role_id=__ADMIN_ROLE__.role_id')->where("username = '{$data['username']}' and password='{$data['password']}'")->find();

			if (!$result) {

				$this->error('用户名或者密码错误！','',1);exit;

			}

            session('admin_id',$result['admin_id']);

            session('act_list',$result['act_list']);

			session('Login',$result);

			adminLog('后台登录',__ACTION__);

			$url = U('Admin/Index/index');

			$this->success('登录成功！',$url,1);exit;

		}

		$this->display();

	}



    

    /**

     * 退出登陆

     */

    public function logout(){

        session_unset();

        session_destroy();

        $this->success("退出成功",U('Admin/Admin/login'));

    }



	//验证码

	public function captcha()

	{

		$Verify = new \Think\Verify();

		$Verify->fontSize = 20;

		$Verify->length   = 4;	

		$Verify->imageH = 41;	

		$Verify->imageW = 145;

		ob_clean();

		$Verify->entry(1);

	}







	//管理员列表

	public function adminList()

	{		

    	$res = $list = array();

    	$keywords = I('keywords');

    	if(empty($keywords)){

    		$res = D('admin')->select();

    	}else{

    		$res = D()->query("select * from __PREFIX__admin where `username` like '%$keywords%' order by id");

    	}

    	$role = D('admin_role')->getField('role_id,role_name');

    	if($res && $role){

    		foreach ($res as $val){

    			$val['role'] =  $role[$val['role_id']];

    			$val['add_time'] = date('Y-m-d H:i:s',$val['add_time']);

    			$list[] = $val;

    		}

    	}

    	$this->assign('list',$list);

        $this->display();

	}



	//管理员添加更新页面

	public function admin_info()

	{

		$id = I('get.admin_id',0);      //获取get过来的id，如果不存在，默认为0

		$act = $id>0?'edit':'add';//判断$id是否>0，是的话就是更新，否则就是添加

		if ($id>0) {

			$result = M('admin')->where("admin_id={$id}")->find();

			$this->assign('result',$result);

		}

    	$role = D('admin_role')->where('1=1')->select();

    	$this->assign('role',$role);		

		$this->assign('act',$act);

		$this->display();

	}



	//处理添加或者更新的数据

	public function adminHandle()

	{

		if(IS_POST){

			$data = I('post.');

			if (I('post.act')=='add') {

				if(D('admin')->where("username='".$data['username']."'")->count()){

					$this->ajaxReturn(array('status'=>0,'msg'=>'此用户名已被注册，请更换!'));exit;

    			}

				unset($data['act']);

				$data['password'] = hash('sha256',$data['password']);

				unset($data['password2']);

				$result = M('admin')->add($data);

				if ($result) {

					$return = [

						'status'=>1,

						'msg'=>'添加成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'添加失败！',

					];

				}			

			}elseif(I('post.act')=='edit'){

				unset($data['act']);

				$data['password'] = hash('sha256',$data['password']);

				unset($data['password2']);

				$old = M('admin')->where("admin_id={$data['admin_id']}")->find();

				if ($old['username']!==$data['username']) {

					$new = M('admin')->where("username='{$old["username"]}'")->find();

					if($new){

						$this->ajaxReturn(array('status'=>0,'msg'=>'该用户已存在'));

					}

				}

				$update = M('admin')->where("admin_id={$data['admin_id']}")->save($data); 

				if ($update!==false) {

					$return = [

						'status'=>1,

						'msg'=>'更新成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'更新失败！',

					];

				}			

			}else{

				$del = M('admin')->where("admin_id={$_POST['admin_id']}")->delete();

				if ($del) {

					$return = [

						'status'=>1,

						'msg'=>'删除成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'删除失败！',

					];

				}				

				

			}



		}

		$this->ajaxReturn($return);

	}



	//角色列表

	public function role()

	{

    	$list = D('admin_role')->order('role_id desc')->select();

    	$this->assign('list',$list);

    	$this->display();

	}



	//角色添加编辑页面显示

	public function role_info()

	{

		$id = I('get.role_id',0);

		$act = $id>0 ? 'edit' : 'add';

		if ($id>0) {

    		$detail = M('admin_role')->where("role_id=$id")->find();

    		$detail['act_list'] = explode(',', $detail['act_list']);

    		$this->assign('detail',$detail);

		}

		$right = M('system_menu')->order('id')->select();

		foreach ($right as $val){

			if(!empty($detail)){

				$val['enable'] = in_array($val['id'], $detail['act_list']);

			}

			$modules[$val['group']][] = $val;

		}

		//权限组

		$group = array('system'=>'系统设置','content'=>'内容管理','goods'=>'商品中心','member'=>'会员中心',

                'order'=>'订单中心','marketing'=>'促销管理','tools'=>'插件工具','count'=>'统计报表','ad'=>'广告管理','admin'=>'权限管理',

        );

		$this->assign('act',$act);

		$this->assign('group',$group);

		$this->assign('modules',$modules);

    	$this->display();

	}



	//角色处理

	public function roleHandle()

	{

		$data = I('post.');

		$data['act_list'] = is_array($data['right']) ? implode(',', $data['right']) : '';

		if ($data['act'] == 'add') {

			$name = I('post.role_name');

			$cir = M('admin_role')->where("role_name='{$name}'")->find();

			if ($cir) {

				$this->ajaxReturn(array('status'=>0,'msg'=>'角色名已存在！'));

			}

			$result = M('admin_role')->add($data);

			if ($result) {

				$return = [

					'status'=>1,

					'msg'=>'添加成功！',

				];

			}else{

				$return = [

					'status'=>0,

					'msg'=>'添加失败！',

				];

			}

		}elseif ($data['act'] == 'edit') {

			$old = M('admin_role')->where("role_id='{$data["role_id"]}'")->find();

			if ($old['role_name']!==$data['role_name']) {

				$new = M('admin_role')->where("role_name='{$data["role_name"]}'")->find();

				if ($new) {

					$this->ajaxReturn(array('status'=>0,'msg'=>'角色名已存在！'));

				}

			}

			$result = M('admin_role')->where("role_id={$data['role_id']}")->save($data);

			if ($result!==false) {

				$return = [

					'status'=>1,

					'msg'=>'更新成功！',

				];

			}else{

				$return = [

					'status'=>0,

					'msg'=>'更新失败！',

				];

			}	

		}else{

			$admin = M('admin')->where("role_id={$data['role_id']}")->select();

			if ($admin) {

				$this->ajaxReturn(array('status'=>0,'msg'=>'该角色已被使用，请先删除对应的管理员！'));exit;

			}

			$result = M('admin_role')->where("role_id={$data['role_id']}")->delete();

			if ($result!==false) {

				$return = [

					'status'=>1,

					'msg'=>'删除成功！',

				];

			}else{

				$return = [

					'status'=>0,

					'msg'=>'删除失败！',

				];

			}

		}

		$this->ajaxReturn($return);

	}	



 	/*管理员日志

 	**/   

    public function log(){

    	$Log = M('admin_log');

    	$p = I('p',1);

    	$logs = $Log->join('__ADMIN__ ON __ADMIN__.admin_id =__ADMIN_LOG__.admin_id')->order('log_time DESC')->page($p.',20')->select();

    	// var_dump($logs);exit;

    	$this->assign('list',$logs);

    	$count = $Log->where('1=1')->count();

    	$Page = new \Think\Page($count,20);

    	$show = $Page->show();

    	$this->assign('page',$show); 	

    	$this->display();

    }	

}