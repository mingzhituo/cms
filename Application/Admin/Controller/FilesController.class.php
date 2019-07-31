<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2017-11-10 10:26:56
 * @version $Id$
 */
namespace Admin\Controller;

use Think\Controller;
class FilesController extends BaseController {
    
    public function index()
    {
    	$p = I('get.p',1);//獲取頁碼

		$model = M('files');

		$list = $model->order('up_time desc')->page($p.',10')->select();

		$count = $model->where('1=1')->count();// 查询满足要求的总记录数

		$Page  = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数

		$show  = $Page->show();// 分页显示输出
		$this->assign('list',$list);
		$this->assign('page',$show);// 赋值分页输出	
    	$this->display('index');
    }

    public function info()
    {
       /*    $upload = new \Think\Upload();// 实例化上传类  
             $upload->maxSize   =     3145728 ;// 设置附件上传大小  
               $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                   $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    
                     $info   =   $upload->upload();   
                      if(!$info) {// 上传错误提示错误信息     
                         $this->error($upload->getError());    }else{
                         // 上传成功       
                          $this->success('上传成功！');    }*/
    	$this->display('info');
    }

    public function edit()
    {
    	if (IS_POST) {
    		$updata = I('post.');
    		$old = $updata['up_time'];
    		$oldfile = M('files')->where("up_time = $old")->find();
    		$old_img = $oldfile['file_img'];
    		$updata['up_time'] = time();
    		$result = M('files')->where("up_time = $old")->save($updata);
    		if ($result!==false) {
    			$return = [
	    			'status'=>1,

					'msg'=>'修改成功！',
	    		];
	    		@unlink('.'.$old_img);
    		}else{
    			$return = [
	    			'status'=>0,

					'msg'=>'修改失败！',
	    		];
    		}
    		$this->ajaxReturn($return);
    	}
    	$time = I('get.time');
    	$result = M('files')->where("up_time = $time")->find();
    	$this->assign('result',$result);
    	$this->display('edit');
    }

    public function upfiles()
    {
    	$data = I('post.');
    	$data['file_url'] = $data['file_url'][0];
    	$data['up_time'] = time();
    	$result = M('files')->add($data);
    	if ($result) {
    		$return = [
    			'status'=>1,

				'msg'=>'恭喜上传成功！',
    		];
    	}else{
    		$return = [
    			'status'=>0,

				'msg'=>'上传失败！',
    		];
    	}
    	$this->ajaxReturn($return);
    }

    public function del_file()
    {
    	$data = I('get.time');
    	$old = M('files')->where("up_time = $data")->find();
    	$del = M('files')->where("up_time = $data")->delete();
    	if ($del) {

			$return = [

				'status'=>1,

				'msg'=>'删除成功！',

			];
			@unlink('.'.$old['file_url']);
			@unlink('.'.$old['file_img']);
		}else{

			$return = [

				'status'=>0,

				'msg'=>'删除失败！',

			];

		}
		$this->ajaxReturn($return);
    }

    
}