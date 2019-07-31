<?php

namespace Home\Controller;

use Think\Controller;

class SearchController extends BaseController
{
    public function index()
    {
        
        //$article=new Article();$arti->where('title','like','%'.$key.'%')->find();
      // $serHot=$article->getSerHot();false,$config = ['query'=>array('key'=>$key)]
       // $location = D('ArticleCat')->get_infos_pid($now['parent_id'],'sort_order');
        $key = I('keyword');
        //dump($key);die;
       // $afd=M($table)->add($list);
       // $arti = M('article');
        $size = 6;
        $serRes= M('article')->where("(title like '{$key}%' or title like '%{$key}%' or title like '%{$key}') and (cat_id=17 or cat_id=16)")->page($p.','.$size)->select();
        //dump($serRes);die;
        $this->assign(array(
            'serRes'=>$serRes,
            'keyword'=>$key,
            'serHot'=>$serHot,
            'location' => $location,
            ));
         $this->display('index');
    }
}




/*class SearchController extends BaseController {

	public function index(){

       $this->result();

    }

    public function result(){

    	$search = I('get.search');
        $search = trim($search);
        $limit = I('get.limit','news');

        if ($limit=='News') {
            $cat = M('ArticleCat')->where("cat_id=4")->find();
            $location = M('ArticleCat')->where("parent_id=4")->order('sort_order')->select();
            $size = 6;
            $p = I('get.p',1);
            $result = M('article')->where("(title like '{$search}%' or title like '%{$search}%' or title like '%{$search}') and (cat_id=17 or cat_id=16)")->page($p.','.$size)->select();
            $count = M('article')->where("(title like '{$search}%' or title like '%{$search}%' or title like '%{$search}') and (cat_id=17 or cat_id=16)")->count();
            $Page  = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
            $page = $Page->show();
            $p_total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
            $data = [
                'page'=>$page,
                'p'=>$p,
                'p_total'=>$p_total,
                'location'=>$location,
                'cat'=>$cat,
            ];
            $this->assign($data);
        }elseif ($limit=='download') {
            $size = 8;
            $p = I('get.p',1);
            $where['file_name'] = array('like',array($search.'%'.$search.'%','%'.$search),'OR');
            $result = M('files')->where("file_name like '{$search}%' or file_name like '%{$search}%' or file_name like '%{$search}'")->page($p.','.$size)->select();
            $count = M('files')->where("file_name like '{$search}%' or file_name like '%{$search}%' or file_name like '%{$search}'")->count();
            $Page  = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
            $page = $Page->show();
            $p_total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
            $data = [
                'page'=>$page,
                'p'=>$p,
                'p_total'=>$p_total,
            ];

            $this->assign($data);
        }
        elseif ($limit=='case') {
            $size = 9;
            $p = I('get.p',1);
            $where['title'] = array('like',array($search.'%'.$search.'%','%'.$search),'OR');
            $result = M('article')->where("cat_id=15 and (title like '{$search}%' or title like '%{$search}%' or title like '%{$search}')")->page($p.','.$size)->select();
            $count = M('article')->where("cat_id=15 and (title like '{$search}%' or title like '%{$search}%' or title like '%{$search}')")->count();
            $Page  = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
            $page = $Page->show();
            $p_total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
            $data = [
                'page'=>$page,
                'p'=>$p,
                'p_total'=>$p_total,
            ];

            $this->assign($data);
        }
        else{
            $catid = I('get.catid',0);
            $cat = M('goods_category')->where("parent_id=0")->select();
            foreach ($cat as $key => $value) {
                $cat[$key]['son']=M('goods_category')->where("parent_id=".$value['id'])->order('sort_order')->select();
            }
            $now = M('goods_category')->where("id=".$catid)->find();
            !$now && $now['name'] = '搜索结果';
            $size = 12;
            $p = I('get.p',1);
            $where['goods_name'] = array('like',array($search.'%','%'.$search.'%','%'.$search),'OR');
            $result = M('goods')->where($where)->page($p.','.$size)->select();
            $count = M('goods')->where($where)->count();
            $Page  = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
            $page = $Page->show();
            $p_total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
            $data = [
                'page'=>$page,
                'p'=>$p,
                'now'=>$now,
                'cat'=>$cat,
                'p_total'=>$p_total,
            ];

            $this->assign($data);
        }
        // var_dump($result);exit();
        $this->assign(array('result'=>$result,'limit'=>$limit,'search'=>$search));
        $this->display($limit);

    }

}*/