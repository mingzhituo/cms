<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-12-28 09:20:06
 * @version $Id$
 */
namespace Home\Model;

use Think\Model;

class AdModel extends Model {
    public $list = 'list';
    public $page = 'page';
    public $total = 'total';
    public function get_one($id)
    {
    	return $this->where('ad_id='.$id)->find();
    }

    public function get_infos_pid($pid,$sort='',$limit='')
    {
		return $this->where('pid='.$pid)->order($sort)->limit($limit)->select();
    }

    public function get_page($size,$p,$pid,$order='')
    {
        $list = $this->where('pid='.$pid)->page($p.','.$size)->order($order)->select();
        //dump($list);die;
        $count =count($this->get_infos_pid($pid));
        $Page  = new \Think\Page($count,$size);// 实例化分页类 传入总记录数和每页显示的记录数
        $page = $Page->show();
        $total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
        return array(
            $this->list=>$list,
            $this->page=>$page,
            $this->total=>$total,
        );
    }
    public function add_click($id,$n)
    {
        $this->where("ad_id=$id")->save(array('click'=>$n+1));
        return $n+1;
    }

    public function get_prev_next($id,$pid,$sort='')
    {
        return $this->where("ad_id".$id.' and pid='.$pid)->order('ad_id '.$sort)->find();
    }

    public function get_pic_url($where)
    {
    	return $this->where($where)->Field('ad_code')->select();
    }
}