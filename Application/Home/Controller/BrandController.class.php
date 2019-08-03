<?php

namespace Home\Controller;

use Think\Controller;

class BrandController extends BaseController {

    public function _initialize()
    {
        parent::_initialize();
        //$banner = D('ad')->get_one(41);
        $catid = I('get.catid',8);
    	$now = D('ArticleCat')->get_one($catid);
    	$location = D('ArticleCat')->get_infos_pid($now['parent_id'],'sort_order');
    	$cat = D('ArticleCat')->get_one($now['parent_id']);
        $data_f = array(
            'catid' => $catid, 
            'now' => $now,
            'location' => $location,
            //'banner' => $banner,
            'cat' => $cat,
            );
        $this->assign($data_f);
    }

    public function index(){
       $this->page();
    }

    public function page(){
        $catid = I('get.catid',8);
        if ($catid==2) {
            $p = I('get.p',1);
            $model = D('ad');
            $model->total='p_total';
            $data = $model->get_page(9,$p,$catid,'orderby desc');
            $article = D('article')->get_info_cat(8,false,'publish_time desc',6);
            //dump($article);die;
            $data = [
                'p'=>$p,
                'article'=>$article,
            ]+$data;
            $look = 'qualifications';
        }else{
            $id = I('get.id');
            // $article = D('article')->get_info_cat($catid,true);
           $article = D('article')->get_info_cat($catid,true);
         // dump($article);die;
           $data = [
                'article'=>$article,
           ];
           $look = 'about';
        }
    	$this->assign($data);
        $this->display($look);
    }

    public function page_q()
    {
        $id = I('get.id');
        $article = D('article')->get_one($id);
        $article['click'] = D('ad')->add_click($id,$article['click']);
        $prev = D('ad')->get_prev_next("<$id",2,'desc');
        $next = D('ad')->get_prev_next(">$id",2);
        $data = [
            'article'=>$article,
            'prev'=>$prev,
            'next'=>$next,
        ];
        $this->assign($data);
        $this->display('about');
    }
}