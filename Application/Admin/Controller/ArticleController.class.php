<?php

/**

 * 

 * @authors Your Name (you@example.org)

 * @date    2017-09-09 10:00:20

 * @version $Id$

 */

namespace Admin\Controller;

use Think\Controller;

use Admin\Logic\ArticleCatLogic;

class ArticleController extends BaseController {

    

    public function categoryList(){

        $ArticleCat = new ArticleCatLogic(); 

        $cat_list = $ArticleCat->article_cat_list(0, 0, false);

        $type_arr = array('系统默认','系统帮助','系统公告');

        $this->assign('type_arr',$type_arr);

        $this->assign('cat_list',$cat_list);

        $this->display();

    }

    public function message_list()

    {

        $p = I('get.p',1);

        $pageNum =10;

        $num = ($p-1)*$pageNum+1;

        $message = M('cus_msg');

        $list = $message->where('1=1')->order('id asc')->page($p.','.$pageNum)->select();
        //dump($list);die;

        $this->assign('list',$list);

        $count = $message->where('1=1')->count();

        $Page  = new \Think\Page($count,$pageNum);

        $Page->setConfig('next','<span class="paginate_button next" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next">下一页</span>');

        $Page->setConfig('prev','<span class="paginate_button previous aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" id="DataTables_Table_0_next"">上一页</span>');

        $Page->setConfig('first','首页');

        $Page->setConfig('last','尾页');

        $show  = $Page->show();

        $this->assign('page',$show);

        $this->assign('count',$count);

        $this->assign('num',$num);

        $this->display();

    }

    public function message()
    {
        $id = I('get.id');
        $result = M('cus_msg')->where("id=$id")->find();
        $this->assign('msg',$result);
        $this->display('message');
    }

    public function messageHandle()

    {

        If(IS_POST){
            $captcha = check_verify(I('post.captcha'),1);

            if (!$captcha) {

                $this->ajaxReturn(array(
                        'status' => 0, 
                        'msg' => "验证码错误!", 
                    ));exit;

            }
            $data = I('post.');

            $name = I('post.name');

            if ($name=='') {

                $name = 'visitor';

            }

            $data['name'] = $name;

            $result = M('cus_msg')->add($data);

            if ($result) {

                $return = [

                    'status'=>1,

                    'msg'=>'感谢您的留言！',

                ];

            }else{

                $return = [

                    'status'=>0,

                    'msg'=>'留言失败！',

                ];

            }

        }else{

            $del = M('cus_msg')->where("id={$_GET['id']}")->delete();

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

        $this->ajaxReturn($return);



    }

    

    public function category(){

        $ArticleCat = new ArticleCatLogic();  



        $cat_id = I('GET.cat_id',0);

        $act = $cat_id>0?'edit':'add';

        $this->assign('act',$act);

        $cat_info = array();

        if($cat_id){

            $cat_info = D('article_cat')->where('cat_id='.$cat_id)->find();

            $this->assign('cat_info',$cat_info);

        }

        $cats = $ArticleCat->article_cat_list(0,$cat_info['parent_id'],true);

        $this->assign('cat_select',$cats);

        $this->display();

    } 

    

    

    public function categoryHandle(){

    	$data = I('post.');   

        if($data['act'] == 'add'){           

            $d = D('article_cat')->add($data);

        }

        

        if($data['act'] == 'edit')

        {

        	if ($data['cat_id'] == $data['parent_id']) 

			{

        		$this->error("所选分类的上级分类不能是当前分类",U('Admin/Article/category',array('cat_id'=>$data['cat_id'])));

        	}

        	$ArticleCat = new ArticleCatLogic();

        	$children = array_keys($ArticleCat->article_cat_list($data['cat_id'], 0, false)); // 获得当前分类的所有下级分类

        	if (in_array($data['parent_id'], $children))

        	{

        		$this->error("所选分类的上级分类不能是当前分类的子分类",U('Admin/Article/category',array('cat_id'=>$data['cat_id'])));

        	}

        	$d = D('article_cat')->where("cat_id=$data[cat_id]")->save($data);

        }

        // var_dump($data['act']);exit;

        if($data['act'] == 'del'){      	

        	$res = D('article_cat')->where('parent_id ='.$data['cat_id'])->select(); 

        	if ($res)

        	{

		        $return = [

		        		'status' =>0,

		        		'msg'=>'还有子分类，不能删除'

		        	];

        		$this->ajaxReturn($return);exit;

        		// exit(json_encode('还有子分类，不能删除'));

        	}

        	$res = D('article')->where('cat_id ='.$data['cat_id'])->select();       	      	

        	if ($res)

        	{

        		$return = [

		        		'status' =>0,

		        		'msg'=>'非空的分类不允许删除'

		        	];

		        $this->ajaxReturn($return);exit;

        		// exit(json_encode('非空的分类不允许删除'));

        	}      	

        	$d = D('article_cat')->where('cat_id='.$data['cat_id'])->delete();

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



    public function articleList(){

        $Article =  M('Article'); 

        $res = $list = array();

        $p = empty($_REQUEST['p']) ? 1 : $_REQUEST['p'];

        $size = empty($_REQUEST['size']) ? 6 : $_REQUEST['size'];

        

        $where = " 1 = 1 ";

        $keywords = trim(I('keywords'));

        $keywords && $where.=" and title like '%$keywords%' ";

        $cat_id = I('cat_id',0);

        $cat_id && $where.=" and cat_id = $cat_id ";

        $res = $Article->where($where)->order('article_id desc')->page("$p,$size")->select();

        $count = $Article->where($where)->count();// 查询满足要求的总记录数

        $pager = new \Think\AjaxPage($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数

        $page = $pager->show();//分页显示输出



        $ArticleCat = new ArticleCatLogic();


        $cats = $ArticleCat->article_cat_list(0,0,false);
       //dump($cats);die;

        if($res){

            foreach ($res as $val){

                $val['category'] = $cats[$val['cat_id']]['cat_name'];

                $val['add_time'] = date('Y-m-d H:i:s',$val['add_time']);                

                $list[] = $val;

            }

        }
      // dump($cats);die;
       // $cat_name=

        $this->assign('cat_select',$cats);

        $this->assign('cat_id',$cat_id);

        $this->assign('list',$list);// 赋值数据集

        $this->assign('page',$page);// 赋值分页输出

        $this->display('articleList');

    }

    

    public function article(){
        //dump($_GET);die;
        //从list页接收一个catid，传到编辑页
        $catid = I('GET.catid');

        $ArticleCat = new ArticleCatLogic();

        $act = I('GET.article_id')?'edit':'add';

        $info = array();            

        $info['publish_time'] = time();

        if(I('GET.article_id')){

           $article_id = I('GET.article_id');

           $info = D('article')->where('article_id='.$article_id)->find();

        }

       //$info['cat_id']

        $cats = $ArticleCat->article_cat_list(0,0,false);//查出所有的分类

        $this->assign('cat_select',$cats);

        $this->assign('act',$act);

         $this->assign('catid',$catid);

        $this->assign('info',$info);

        $this->display();

    }

    

    public function aticleHandle(){

        $data = I('post.');

        $data['publish_time'] = strtotime($data['publish_time']);//把日期格式转为时间戳

        //$data['content'] = htmlspecialchars(stripslashes($_POST['content']));

        //var_dump($data['act']);exit;

        if($data['act'] == 'add'){

            $data['click'] = I('post.click')?I('post.click'):mt_rand(1000,1300);

            $data['add_time'] = time(); 

            $r = D('article')->add($data);

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
            $old_data = D('article')->where('article_id='.$data['article_id'])->find();

            $r = D('article')->where('article_id='.$data['article_id'])->save($data);

            if ($r!==false) {
                if ($old_data['thumb'] != $data['thumb']) {
                    unlink('.'.$old_data['thumb']);   
                }

                $return = [

                        'status' =>1,

                        'msg'=>'编辑成功！'

                    ];                

            }else{
                if ($old_data['thumb'] != $data['thumb']) {
                    unlink('.'.$data['thumb']);   
                }

                $return = [
                 

                        'status' =>0,

                        'msg'=>'编辑失败！'

                    ]; 

            }            

        }

        

        if($data['act'] == 'del'){
            $old = D('article')->where('article_id='.$data['article_id'])->find();

            $r = D('article')->where('article_id='.$data['article_id'])->delete();

            if ($r) {
                 unlink('.'.$old['thumb']);

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

        // $referurl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : U('Admin/Article/articleList');//判断是不是存在上一个页面跳转过来的，如果是那么跳转上一个，不是用默认的

        $this->ajaxReturn($return);

    }  



    

    

    public function link(){

        $link_id = I('GET.link_id',0);

        $act = $link_id>0?'edit':'add';

        $this->assign('act',$act);

        $link_info = array();

        if($link_id){

            $link_info = D('friend_link')->where('link_id='.$link_id)->find();

            $this->assign('info',$link_info);

        }

        $this->display();

    }

    

    public function linkList(){

        $Ad =  M('friend_link');

        $res = $Ad->where('1=1')->order('orderby desc')->page($_GET['p'].',10')->select();

        if($res){

            foreach ($res as $val){

                $val['target'] = $val['target']>0 ? '开启' : '关闭';

                $list[] = $val;

            }

        }

        $this->assign('list',$list);// 赋值数据集

        $count = $Ad->where('1=1')->count();// 查询满足要求的总记录数

        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

        $show = $Page->show();// 分页显示输出

        $this->assign('page',$show);// 赋值分页输出

        $this->display();

    }

    

    public function linkHandle(){

        $data = I('post.');

        if($data['act'] == 'add'){

            stream_context_set_default(array('http'=>array('timeout' =>2)));send_http_status('311');

            $r = D('friend_link')->add($data);

            if ($r)

                $return = array('status'=>'1','msg'=>'添加成功！');

            else

                $return = array('status'=>'0','msg'=>'添加失败！');



        }elseif ($data['act'] == 'edit') {

            $r = D('friend_link')->where('link_id='.$data['link_id'])->save($data);

            if ($r!==false)

                $return = array('status'=>'1','msg'=>'编辑成功！');

            else

                $return = array('status'=>'0','msg'=>'编辑失败！');            

        }else{

            $r = D('friend_link')->where('link_id='.$data['link_id'])->delete();

            if ($r!==false)

                $return = array('status'=>'1','msg'=>'删除成功！');

            else

                $return = array('status'=>'0','msg'=>'删除失败！');              

        }

        $this->ajaxReturn($return);

    }



}