<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-12-29 15:54:13
 * @version $Id$
 */
namespace Home\Model;

use Think\Model;


class ArticleCatModel extends Model {
    
    public function get_infos_pid($pid,$sort='',$limit='')
    {
		return $this->where("parent_id=".$pid)->order($sort)->limit($limit)->select();
    }
    public function get_one($id)
    {
    	return $this->where("cat_id=".$id)->find();
    }
}