<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-12-30 11:54:02
 * @version $Id$
 */
namespace Home\Model;

use Think\Model;

class GoodsImagesModel extends Model {
    
    public function get_goodimg($goods_id,$sort='',$limit='')
    {
    	return $this->where('goods_id='.$goods_id)->order($sort)->limit($limit)->select();
    }
}