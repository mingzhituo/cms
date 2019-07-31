<?php

/**

 * 

 * @authors Your Name (you@example.org)

 * @date    2017-09-08 10:53:19

 * @version $Id$

 */

namespace Admin\Controller;

use Think\Controller;

class AdController extends BaseController {

    public function positionList()

    {

		$p = I('get.p',1);//獲取頁碼

		$model = M('ad_position');

		$ad_position = $model->order('position_id desc')->page($p.',10')->select();		

		$this->assign('list',$ad_position);//查詢出對應的頁面的數據

		$count = $model->where('1=1')->count();// 查询满足要求的总记录数

		$Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

		$show  = $Page->show();// 分页显示输出

		$this->assign('page',$show);// 赋值分页输出		

		$this->assign('count',$count);

		$this->display();    	

    }



	//广告位添加更新页面

	public function position_info()

	{

		$id = I('get.position_id',0);      //获取get过来的id，如果不存在，默认为0

		$act = $id>0?'edit':'add';//判断$id是否>0，是的话就是更新，否则就是添加

		if ($id>0) {

			$result = M('ad_position')->where("position_id={$id}")->find();

		}

		$this->assign('result',$result);

		$this->assign('act',$act);

		$this->display();

	}



	//处理添加或者更新的数据

	public function positionHandle()

	{

		if(IS_POST){

			$data = I('post.');

			if (I('post.act')=='add') {

				$result = M('ad_position')->add($data);

				if ($result) {

					$return = [

						'status'=>1,

						'msg'=>'添加成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'添加失败！',

					];

				}			

			}elseif(I('post.act')=='edit'){

				$update = M('ad_position')->where("position_id={$data['position_id']}")->save($data); 

				if ($update!==false) {

					$return = [

						'status'=>1,

						'msg'=>'更新成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'更新失败！',

					];

				}			

			}else{

				$del = M('ad_position')->where("position_id={$data['position_id']}")->delete();

				if ($del) {

					$return = [

						'status'=>1,

						'msg'=>'删除成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'删除失败！',

					];

				}				

			}

			$this->ajaxReturn($return);

		}

	}	



	public function adList()

	    {

        $Ad =  M('ad'); 

        $where = "1=1";

        if(I('pid')){

        	$where = "pid=".I('pid');

        	$this->assign('pid',I('pid'));

        }

        $keywords = I('keywords',false);

        if($keywords){

        	$where = "ad_name like '%$keywords%'";

        }

        $count = $Ad->where($where)->count();// 查询满足要求的总记录数

        $Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

        $res = $Ad->where($where)->order('pid desc')->limit($Page->firstRow.','.$Page->listRows)->select();

        $list = array();

        if($res){

        	$media = array('图片','文字','flash');

        	foreach ($res as $val){

        		$val['media_type'] = $media[$val['media_type']];        		

        		$list[] = $val;

        	}

        }

                                     

        $ad_position_list = M('AdPosition')->getField("position_id,position_name,is_open");                        

        $this->assign('ad_position_list',$ad_position_list);//广告位 

        $show = $Page->show();// 分页显示输出

        $this->assign('list',$list);// 赋值数据集

        $this->assign('page',$show);// 赋值分页输出

        $this->display();

	    } 



	//广告位添加更新页面

	public function ad_info()

	{

		$id = I('get.id',0);      //获取get过来的id，如果不存在，默认为0

		$act = $id>0?'edit':'add';//判断$id是否>0，是的话就是更新，否则就是添加

		if ($id>0) {

			$result = M('ad')->where("ad_id={$id}")->find();

		}

		$this->assign('result',$result);

		$position = M('ad_position')->select();
		$water = M('config')->where("name = 'is_mark'")->getField('value');
		$this->assign('water',$water);
		$this->assign('position',$position);

		$this->assign('act',$act);

		$this->display();

	}



	//处理添加或者更新的数据

	public function adHandle()

	{

		if(IS_POST){

			$data = I('post.');
			$data['start_time'] = strtotime($data['begin']);
			$data['end_time'] = strtotime($data['end']);
			// var_dump($data);exit;

			if (I('post.act')=='add') {

				// var_dump($data);exit;

				$result = M('ad')->add($data);

				if ($result) {

					$return = [

						'status'=>1,

						'msg'=>'添加成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'添加失败！',

					];

				}			

			}elseif(I('post.act')=='edit'){
				$old_data = M('ad')->where("ad_id={$data['ad_id']}")->find();
				$update = M('ad')->where("ad_id={$data['ad_id']}")->save($data); 

				if ($update!==false) {
					if ($old_data['ad_code'] != $data['ad_code']) {
	                    unlink('.'.$old_data['ad_code']);   
	                }

					$return = [

						'status'=>1,

						'msg'=>'更新成功！',

					];

				}else{

					if ($old_data['ad_code'] != $data['ad_code']) {
	                    unlink('.'.$data['ad_code']);   
	                }
					$return = [

						'status'=>0,

						'msg'=>'更新失败！',

					];

				}			

			}else{

				$old = M('ad')->where("ad_id={$data['ad_id']}")->find();
				$del = M('ad')->where("ad_id={$data['ad_id']}")->delete();

				if ($del) {
					unlink('.'.$old['ad_code']);
					$return = [

						'status'=>1,

						'msg'=>'删除成功！',

					];

				}else{

					$return = [

						'status'=>0,

						'msg'=>'删除失败！',

					];

				}				

			}

			$this->ajaxReturn($return);

		}

	}		       

}