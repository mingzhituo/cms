<?php
namespace Home\Controller;

use Think\Controller;

class NewsController extends BaseController {

    public function _initialize()
    {
        parent::_initialize();
        //$nbanner = D('ad')->get_one(43);
      
        $catid = I('get.catid',31);
            //
        /*   if ($catid == 00) {
          $catid = "31 OR cat_id=32 OR cat_id=33";
        }
   */
        //dump($catid);die;
       /*   if (is_null($catid)) {
               $cat_id = "31 or cat_id=32 or cat_id=33";
        }else{
                $cat_id = I('get.catid');
        }*/


        //dump($catid);die;
       $now = D('ArticleCat')->get_one($catid);
      //dump($now);die;
        $location = D('ArticleCat')->get_infos_pid($now['parent_id'],'sort_order');
       //dump($location);die;
        $cat = D('ArticleCat')->get_one($now['parent_id']);
        $data_f = array(
            'catid' => $catid, 
            'now' => $now,
            'location' => $location,
            'nbanner' => $banner,
            'cat' => $cat,
            );
        $this->assign($data_f);
    }


    public function index()
    {
        $this->column();
    }

    public function column()
    {
        $catid = I('get.catid',31);
        $p = I('get.p',1);
        $model = D('article');
        $model->total='p_total';
        $data = $model->get_page(4,$p,$catid,'publish_time desc');

        $data = [
            'p'=>$p,
        ]+$data;
        //var_dump($data);die;
        $this->assign($data);
        $this->display('list');
    }

    public function page()
    {
        $id = I('get.id');
        $on = D('article')->get_one($id);
        $on['click'] = D('article')->add_click($id,$on['click']);
        $prev = D('article')->get_prev_next("<$id",$on['cat_id'],'desc');
        $next = D('article')->get_prev_next(">$id",$on['cat_id']);
        $data = [
            'on'=>$on,
            'prev'=>$prev,
            'next'=>$next,
        ];
        $this->assign($data);
        $this->display('detail');
    }



     public function serch()
    {
        
        //$article=new Article();$arti->where('title','like','%'.$key.'%')->find();
      // $serHot=$article->getSerHot();false,$config = ['query'=>array('key'=>$key)]
        //$location = D('ArticleCat')->get_infos_pid($now['parent_id'],'sort_order');
        $key = I('keyword');
       // $afd=M($table)->add($list);
       // $arti = M('article');
        $model = M('article');
        $size = 2;
        $count = $model->where("(title like '{$key}%' or title like '%{$key}%' or title like '%{$key}') and (cat_id=17 or cat_id=16)")->count();
            $Page  = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
            $page = $Page->show();
            $p = I('get.p',1);
            $p_total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
        $serRes= $model->where("(title like '{$key}%' or title like '%{$key}%' or title like '%{$key}') and (cat_id=17 or cat_id=16)")->page($p.','.$size)->select();
        //var_dump($serRes);die;
        $this->assign(array(
            'serRes'=>$serRes,
            'keyword'=>$key,
            'serHot'=>$serHot,
            'page' => $page,
            'p' => $p,
            'count' => $count,
            ));
         $this->display('serch');
    }
}