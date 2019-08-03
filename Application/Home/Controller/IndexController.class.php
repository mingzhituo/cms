<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends BaseController {
    
    public function index(){
      /*  if(think_send_mail('188836216@qq.com','您的注册验证码为','您的注册验证码为这是测试邮箱功能')) {
            $this->show('mail test success!');
        }else{
            $this->show('xxx!');
        }*/
        
   
       // dump($down);die;
         $proZhishi = D('goods_category')->where('parent_id=4')->limit(3)->select();
         $pro2Level = D('goods_category')->where('level=2')->limit(20)->select();
         //dump($pro3Level);die;
        $proJip = D('goods')->where('cat_id=5')->limit(8)->select();
        $pro = D('goods')->limit(20)->select();

       // dump($pro);die;
        $proMinh = D('goods')->where('cat_id=6')->limit(3)->select();
        $about2 = D('article')->get_info_cat(8,true);
       //$len2=mb_strlen($about2["description"],'utf-8');
        
        $about_img = D('ad')->get_one(51);

       
        $about_desc=D('article')->where("title like'%简介%'")->find();
   

    
           

        //将转好的字符串传入，返回查询结果
        $pson=D('article_cat')->get_infos_pid(23);
        //dump($pson);die;
        //$this->pChild(15)

        $case = D('article')->get_info_cat($this->pChild(15),false,'publish_time desc',8);
       
        $casedeng = D('article')->get_info_cat('17 or cat_id=16',false,'publish_time desc',3);
        //dump($case);die;
 

       
         
        
      
        $newguize=D('article')->get_info_cat('17',false,'publish_time asc',3);
        $qwe=D('article')->get_info_cat('16',false,'publish_time asc',3);
       //dump($newjiq);die;
        $newwenh=D('article')->get_info_cat('28',false,'publish_time asc',3);
        
        $newshot = D('article')->get_info_cat('31',false,'publish_time asc',3);
        $newww=D('article')->get_info_cat('32',false,'publish_time desc',5);
       

        $friend2 = M('friend_link')->where('is_show=1')->limit(12)->order('orderby desc')->select();
        $data=[
          
            'prominh'=>$proMinh,
            'proZhishi'=>$proZhishi,
            'projip'=>$proJip,
            'about2'=>$about2,
            'newsone'=>$newsone,
            'newshot'=>$newshot,
            'about_desc'=>$about_desc,
            'newid15'=>$newid15,
            'case'=>$case,
            'friend2'=>$friend2,
            'about_img'=>$about_img,
            'pro'=>$pro,
            'pro2Level'=>$pro2Level,
            'newguize'=>$newguize,
            'qwe'=>$qwe,
            'newwenh'=>$newwenh,
            'newww'=>$newww,
        ];
    	$this->assign($data);
        $this->display('index');
    }



   
    /**
     * ajax 修改指定表数据字段  一般修改状态 比如 是否推荐 是否开启 等 图标切换的
     * table,id_name,id_value,field,value
     */
    public function changeTableVal2(){  


            if (IS_POST) {
          /*      $ck = new \Think\Verify();
            $captcha = I('post.captcha');
             */

            $captcha = check_verify(I('post.captcha'));
            // $result =
         //  $this->ajaxReturn($captcha);

            //dump($result);die;
            if (!$captcha) {

                $this->error('亲，验证码错误，请重新填写验证码，您的留言未清理','',1);exit;

            }

           /* if (!$ck ->check('$captcha',)) {

                $this->error('验证码错误','',1);exit;

           }  */
        /*    $table = I('table'); // 表名
            $id_name = I('id_name'); // 表主键id名
            $id_value = I('id_value'); // 表主键id值
            $field  = I('field'); // 修改哪个字段
            $value  = I('value'); // 修改字段值                        
            M($table)->where("$id_name = $id_value")->save(array($field=>$value)); // 根据条件保存修改的数据*/
            //dump($_POST);die;
        $table = I('table');

       $list=I($post);
       //dump($list);die;
       // unset($list['table']);
       $list[time] = time();
        $afd=M($table)->add($list);
        if ($afd>0) {
            $this->success('留言成功！等待管理员审核通过后展示，现在为您跳转回留言页','',2);
            //$this->redirect('/index.php/Home/Contact/index');
        }else{
            $this->error('');
        }
    
    }
     


}}