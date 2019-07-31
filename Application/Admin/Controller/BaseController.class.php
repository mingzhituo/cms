<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-09-08 09:34:22
 * @version $Id$
 */
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    /*
     * 初始化操作
     */
    public function _initialize() 
    {
        $this->assign('action',ACTION_NAME);
        //过滤不需要登陆的行为
        if(in_array(ACTION_NAME,array('login','logout','captcha','messageHandle','captcha')) || in_array(CONTROLLER_NAME,array('Ueditor','Uploadify'))){
        	//return;
        }else{
        	if(session('admin_id') > 0 ){
        		$this->check_priv();//检查管理员菜单操作权限
        	}else{
        		$this->error('请先登陆',U('Admin/Admin/login'),1);
        	}
        }
        $icon = M('ad')->where('pid=4')->getField('ad_code');
        $this->assign('icon',$icon);
        // $this->public_assign();
    }
    

    //检查管理员菜单操作权限
    public function check_priv()
    {
        $ctl = CONTROLLER_NAME;
        $act = ACTION_NAME;
        $act_list = session('act_list');
        //无需验证的操作
        $uneed_check = array('login','logout','captcha','vertify','imageUp','webupload','login_task');
        if($ctl == 'Index' || $act_list == 'all'){
            //后台首页控制器无需验证,超级管理员无需验证
            return true;
        }elseif(strpos('ajax',$act) || in_array($act,$uneed_check)){
            //所有ajax请求不需要验证权限
            return true;
        }else{
            $right = M('system_menu')->where("id in ($act_list)")->cache(true)->getField('right',true);
            foreach ($right as $val){
                $role_right .= $val.',';
            }
            $role_right = explode(',', $role_right);
            //检查是否拥有此操作权限
            if(!in_array($ctl.'Controller@'.$act, $role_right)){
                $this->error('您没有操作权限,请联系超级管理员分配权限',U('Admin/Index/welcome'));
            }
        }
    }    
}