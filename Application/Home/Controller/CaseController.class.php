<?php

namespace Home\Controller;

use Think\Controller;

class CaseController extends BaseController {
   /* private $cat_id;

    public function _initialize()
    {
        parent::_initialize();
        $banner = D('ad')->get_one(43);
        $location = D('ArticleCat')->get_infos_pid(21,'sort_order');
        $this->cat_id = $catid = I('get.catid',$location[0]['cat_id']);
        var_dump($this->cat_id);die;
        $now = D('ArticleCat')->get_one($catid);
        $cat = D('ArticleCat')->get_one($now['parent_id']);
        $data_f = array(
            'catid' => $catid, 
            'now' => $now,
            'location' => $location,
            'banner' => $banner,
            'cat' => $cat,
            );
        $this->assign($data_f);
    }*/

 public function _initialize()
    {
       
        parent::_initialize();
        
        //$nbanner = D('ad')->get_one(47);
        $catid= I('get.catid',19);
        $now = D('ArticleCat')->get_one($catid);
        $location = D('ArticleCat')->get_infos_pid($now['parent_id'],'sort_order');
       //dump($location);die;
        $cat = D('ArticleCat')->get_one($now['parent_id']);
        $data_f = array(
            'catid' => $catid, 
            'now' => $now,
            'location' =>$location,
            'cat' => $cat,
            //'banner' => $nbanner,
            );
        $this->assign($data_f);
    }




    public function index()
    {
        $this->column();
    }

    public function column()
    {
        $catid = I('get.catid',19);
        $p = I('get.p',1);
        $model = D('article');
        $model->total='p_total';
        $data = $model->get_page(8,$p,$catid,'publish_time desc');
        //dump($data);die;
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
        //var_dump($on);die;
         $model = D('goods');
        $hot = $model->get_infos('0 or is_hot=1','sort desc',3);

        $on['click'] = D('article')->add_click($id,$on['click']);
        $prev = D('article')->get_prev_next("<$id",$on['cat_id'],'desc');
        //dump($prev);die;
        $next = D('article')->get_prev_next(">$id",$on['cat_id']);
        $data = [
            'on'=>$on,
            'prev'=>$prev,
            'next'=>$next,
            'hot'=>$hot,
        ];
        $this->assign($data);
        $this->display('detail');
    }

}