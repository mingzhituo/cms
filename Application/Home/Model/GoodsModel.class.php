<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-12-30 11:18:05
 * @version $Id$
 */
namespace Home\Model;

use Think\Model;

class GoodsModel extends Model {
    public $list = 'list';
    public $page = 'page';
    public $total = 'total';
    public function get_page($size,$p,$cat_id,$order='')
    {
    	$where = $cat_id>0?'cat_id='.$cat_id:'1=1';
        $list = $this->where($where)->page($p.','.$size)->order($order)->select();
        //var_dump($list);die;
        $count =$this->where($where)->count();
        $Page  = new \Think\Page($count,$size);//实例化分页类 传入总记录数和每页显示的记录数
        $page = $Page->show();
        $total = $count%$size>0?($count-$count%$size)/$size+1:$count/$size;
        return array(
            $this->list=>$list,
            $this->page=>$page,
            $this->total=>$total,
        );
    }

    public function get_one($id)
    {
    	return $this->where('goods_id='.$id)->find();
    }

    public function get_infos($catid,$sort='',$limit='')
    {
    	return $this->where('cat_id='.$catid)->order($sort)->limit($limit)->select();
    }

    public function get_detail($id)
    {
    	$goods = $this->get_one($id);
    	$goodsimgs = M('goods_images')->where('goods_id='.$id)->limit(20)->select();
    	$attr = M('goods_attr')->where('goods_id='.$id)->select();
    	$attr_name = M('goods_attribute')->where('type_id='.$goods['goods_type'])->getField('attr_id,attr_name');
        foreach ($attr as $key => $value) {
            $attr[$key]['attr_name']=$attr_name[$value['attr_id']];
        }
        $goods['images']=$goodsimgs;
        $goods['attr']=$attr;
        return $goods;
    }
}