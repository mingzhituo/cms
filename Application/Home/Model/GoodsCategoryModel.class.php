<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-12-29 16:43:24
 * @version $Id$
 */
namespace Home\Model;

use Think\Model;


class GoodsCategoryModel extends Model {
    
    public function get_info_pid($pid,$sort='',$limit='')
    {
		return $this->where('parent_id='.$pid)->order($sort)->limit($limit)->select();

    }
    public function get_cat()
    {
    	$cat = $this->get_info_pid(0,'sort_order');
        foreach ($cat as $key => $value) {
          $cat[$key]['son']=$this->get_info_pid($value['id'],'sort_order');
        }
        return $cat;
    }

    public function get_tree_cat($pid='0',$sort='sort_order desc')
    {
        $cat = $this->where('parent_id='.$pid)->order($sort)->select();
        foreach ($cat as $key => $value) {
          $cat[$key]['son']=$this->get_tree_cat($value['id']);
        }
        return $cat;
    }

    public function get_one($id)
    {
        return $this->where("id=".$id)->find();
    }
}