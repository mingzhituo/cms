<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-12-29 17:34:30
 * @version $Id$
 */
namespace Home\Model;

use Think\Model;

class ArticleModel extends Model {
    public $list = 'list';
    public $page = 'page';
    public $total = 'total';
    public function get_one($id)
    {
    	return $this->where('article_id='.$id)->find();
    }

    

    public function get_info_cat($id,$on=false,$sort='',$limit='')
    {
    	if ($on) {
    		return $this->where('cat_id='.$id)->find();
    	}else{
    		return $this->where('cat_id='.$id)->order($sort)->limit($limit)->select();
    	}
    }

    public function add_click($id,$n)
    {
        $this->where("article_id=$id")->save(array('click'=>$n+1));
        return $n+1;
    }

    public function get_page($size,$p,$cat_id,$order='')
    {
        $list = $this->where('cat_id='.$cat_id)->page($p.','.$size)->order($order)->select();
        $count =count($this->get_info_cat($cat_id));
        $Page  = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
        $page = $Page->show();
        $total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
        return array(
            $this->list=>$list,
            $this->page=>$page,
            $this->total=>$total,
        );
    }
    public function get_prev_next($id,$pid,$sort='')
    {
        return $this->where("article_id".$id.' and cat_id='.$pid)->order('article_id '.$sort)->find();
    }
}