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
        
    	
         $proZhishi = D('goods_category')->where('parent_id=4')->limit(3)->select();
         $pro2Level = D('goods_category')->where('level=2')->limit(20)->select();
         //dump($pro3Level);die;
         // $proJip = D('goods')->where('cat_id=5')->limit(8)->select();
        $pro = D('goods')->limit(20)->select();

       // dump($pro);die;
        //$proMinh = D('goods')->where('cat_id=6')->limit(3)->select();
       // $about2 = D('article')->get_info_cat(8,true);
       //$len2=mb_strlen($about2["description"],'utf-8');
        
        $about_img = D('ad')->get_one(51);

       
        $about_desc=D('article')->where("title like'%简介%'")->find();
     //dump($about_desc);die;
        

    //案例,以下：先将父id的下的子id查出来，因为是个二维数组，所以用foreach变为一维数组
      
            $sonarr=D('article_cat')->where("cat_name like'%案例%'")->field(cat_id)->select();
            //dump($sonstr);die;
            if ($sonarr) {
              foreach ($sonarr as $k => $v) {
               foreach ($v as $key => $value) {
                  //print_r("$key-----$value");
                $catid[]=$value;
               }
            }
        //用implode()函数将一维数组转为字符串
        $sonstr=implode(' OR cat_id=',$catid);
        //dump($sonstr);die;
        //将转好的字符串传入，返回查询结果
        $case = D('article')->get_info_cat($sonstr,false,'publish_time desc',8);
         $casedeng = D('article')->get_info_cat('17 or cat_id=16',false,'publish_time desc',3);
            }
           
      
        //dump($newshot);die;
        $newlist=D('article')->get_info_cat('31 OR cat_id =32 OR cat_id =33',false,'publish_time desc',5);
        //dump($newlist);die;
        $newsone=D('article')->get_one('206');
       // dump($newsone);die;
        //var_dump($newsone);die;
        $friend2 = M('friend_link')->where('is_show=1')->limit(12)->order('orderby desc')->select();
        $data=[
          
            'prominh'=>$proMinh,
            'proZhishi'=>$proZhishi,
            'projip'=>$proJip,
            'about2'=>$about2,
            'newsone'=>$newsone,
            'newshot'=>$newshot,
            'about_desc'=>$about_desc,
            'newlist'=>$newlist,
            'case'=>$case,
            'friend2'=>$friend2,
            'about_img'=>$about_img,
            'pro'=>$pro,
            'pro2Level'=>$pro2Level,
        ];
    	$this->assign($data);
        $this->display('index');
    }
    /**
     * ajax 修改指定表数据字段  一般修改状态 比如 是否推荐 是否开启 等 图标切换的
     * table,id_name,id_value,field,value
     */
    public function changeTableVal(){
        /*    $table = I('table'); // 表名
            $id_name = I('id_name'); // 表主键id名
            $id_value = I('id_value'); // 表主键id值
            $field  = I('field'); // 修改哪个字段
            $value  = I('value'); // 修改字段值                        
            M($table)->where("$id_name = $id_value")->save(array($field=>$value)); // 根据条件保存修改的数据*/

        $table = I('table');
       $list=I($post);
        unset($list['table']);
        $afd=M($table)->add($list);
        if ($afd>0) {
            $this->success('留言成功！现在为您跳转至联系页面','/Home/Contact/index',2);         
            //$this->redirect('/index.php/Home/Contact/index');
        }else{
            $this->error('');
        }
    }



}