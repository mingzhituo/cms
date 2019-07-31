<?php

/**

 * 

 * @authors Your Name (you@example.org)

 * @date    2017-09-11 09:05:22

 * @version $Id$

 */





namespace Admin\Controller;
use Think\Image;
use Admin\Logic\GoodsLogic;

class SystemController extends BaseController{

	

	/*

	 * 配置入口

	 */

	public function index()

	{          

		/*配置列表*/

		$group_list = array('shop_info'=>'网站信息','water'=>'水印设置'/*,'basic'=>'基本设置','sms'=>'短信设置','shopping'=>'购物流程设置','smtp'=>'邮件设置','distribut'=>'分销设置'*/);		

		$this->assign('group_list',$group_list);

		$inc_type =  I('get.inc_type','shop_info');

		$this->assign('inc_type',$inc_type);

		$config = tpCache($inc_type);

		if($inc_type == 'shop_info'){

			$province = M('region')->where(array('parent_id'=>0))->select();

			$city =  M('region')->where(array('parent_id'=>$config['province']))->select();

			$area =  M('region')->where(array('parent_id'=>$config['city']))->select();

			$this->assign('province',$province);

			$this->assign('city',$city);

			$this->assign('area',$area);

		}
        if ($inc_type == 'water') {
            $water = M('config')->where("name = 'is_mark'")->getField('value');
            $this->assign('water',$water);
        }
		$this->assign('config',$config);//当前配置项

        C('TOKEN_ON',false);

		$this->display($inc_type);

	}

	

	/*

	 * 新增修改配置

	 */

	public function handle()

	{

		$param = I('post.');
        $inc_type = $param['inc_type'];
		//unset($param['__hash__']);

		unset($param['inc_type']);

		tpCache($inc_type,$param);

		$this->success("操作成功",U('System/index',array('inc_type'=>$inc_type)));

	}        

        

       /**

        * 自定义导航

        */

    public function navigationList(){

        $navigation =  M('navigation'); 

        $res = $list = array();

        $p = empty($_REQUEST['p']) ? 1 : $_REQUEST['p'];

        $size = empty($_REQUEST['size']) ? 10 : $_REQUEST['size'];

        

        $where = " 1 = 1 ";

        $keywords = trim(I('keywords'));

        $keywords && $where.=" and title like '%$keywords%' ";

        $cat_id = I('cat_id',0);

        $cat_id && $where.=" and cat_id = $cat_id ";

        $res = $navigation->where($where)->order('id desc')->page("$p,$size")->select();

        $count = $navigation->where($where)->count();// 查询满足要求的总记录数

        $pager = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数

        $page = $pager->show();//分页显示输出

        $this->assign('cats',$cats);

        $this->assign('cat_id',$cat_id);

        $this->assign('list',$res);// 赋值数据集

        $this->assign('page',$page);// 赋值分页输出

        $this->display();

    }

    

    public function navigation(){

    	$id = I('get.id',0);

        $act = $id>0?'edit':'add';

        $info = array();

        if($id>0){

           $info = D('navigation')->where('id='.$id)->find();

        }

        $this->assign('act',$act);

        $this->assign('info',$info);

        $this->display();

    }

    

    public function navigationHandle(){

        $data = I('post.');

        if($data['act'] == 'add'){

            $r = D('navigation')->add($data);

            if ($r) {

                $return = [

                        'status' =>1,

                        'msg'=>'添加成功！'

                    ];                

            }else{

                $return = [

                        'status' =>0,

                        'msg'=>'添加失败！'

                    ]; 

            }

        }

        

        if($data['act'] == 'edit'){

            $r = D('navigation')->where('id='.$data['id'])->save($data);

            if ($r!==false) {

                $return = [

                        'status' =>1,

                        'msg'=>'编辑成功！'

                    ];                

            }else{

                $return = [

                        'status' =>0,

                        'msg'=>'编辑失败！'

                    ]; 

            }            

        }

        

        if($data['act'] == 'del'){

            $r = D('navigation')->where('id='.$data['id'])->delete();

            if ($r) {

                $return = [

                        'status' =>1,

                        'msg'=>'删除成功！'

                    ];                

            }else{

                $return = [

                        'status' =>0,

                        'msg'=>'删除失败！'

                    ]; 

            }       

        }

        // $referurl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : U('Admin/Article/navigationList');//判断是不是存在上一个页面跳转过来的，如果是那么跳转上一个，不是用默认的

        $this->ajaxReturn($return);

    } 

 

    //权限资源列表     

     function right_list(){

        $group = array('system'=>'系统设置','content'=>'内容管理','goods'=>'商品中心','member'=>'会员中心',

                'order'=>'订单中心','marketing'=>'促销管理','tools'=>'插件工具','count'=>'统计报表','ad'=>'广告管理','admin'=>'权限管理',

        );

        $right_list = M('system_menu')->select();

        $this->assign('right_list',$right_list);

        $this->assign('group',$group);

        $this->display();   

     }



     public function right()

     {

        $id = I('get.id',0);

        $act = $id>0?'edit':'add';

        if($id>0){

            $info = M('system_menu')->where(array('id'=>$id))->find();

            $info['right'] = explode(',', $info['right']);

            $this->assign('info',$info);

        }

        $group = array('system'=>'系统设置','content'=>'内容管理','goods'=>'商品中心','member'=>'会员中心',

                'order'=>'订单中心','marketing'=>'促销管理','tools'=>'插件工具','count'=>'统计报表','ad'=>'广告管理','admin'=>'权限管理',

        );

        $planPath = APP_PATH.'Admin/Controller';

        $planList = array();

        $dirRes   = opendir($planPath);

        while($dir = readdir($dirRes))

        {

            if(!in_array($dir,array('.','..','.svn')))

            {

                $planList[] = basename($dir,'.class.php');

            }

        }

        $this->assign('act',$act);

        $this->assign('planList',$planList);

        $this->assign('group',$group);

        $this->display();         

     }



     //获取ajax的action值

     function ajax_get_action()

     {

        $control = I('controller');

        $advContrl = get_class_methods("Admin\\Controller\\".$control);

        //dump($advContrl);

        $baseContrl = get_class_methods('Admin\Controller\BaseController');

        $diffArray  = array_diff($advContrl,$baseContrl);

        $html = '';

        foreach ($diffArray as $val){

            $html .= "<option value='".$val."'>".$val."</option>";

        }

        exit($html);

     }



    public function rightHandle()

    {

      $data = I('post.');  

      $data['right'] = implode(',',$data['right']);

      if ($data['act'] == 'add') {

            if(M('system_menu')->where(array('name'=>$data['name']))->count()>0){

                $this->error('该权限名称已添加，请检查',U('System/right_list'));

            }

            unset($data['id']);

            $d = M('system_menu')->add($data);



           }elseif ($data['act'] == 'edit') {

                M('system_menu')->where(array('id'=>$data['id']))->save($data);

           }else{

                $d= M('system_menu')->where("id={$_POST['id']}")->delete();

           }

            if($d!==false){

                $return = [

                    'status' =>1,

                    'msg'=>'操作成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'操作失败'

                ];

            }              

           $this->ajaxReturn($return);  

    }     



}