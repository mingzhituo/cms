<?php

/**

 * 

 * @authors Your Name (you@example.org)

 * @date    2017-09-08 09:47:51

 * @version $Id$

 */

namespace Admin\Controller;

use Think\Controller;
use Think\Image;

class UploadifyController extends Controller {

	public function webupload()

	{

	    $upload = new \Think\Upload();// 实例化上传类

	    $upload->maxSize   =     3145728 ;// 设置附件上传大小

	    $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型

	    $upload->rootPath  =      './upload/'; // 设置附件上传根目录

	 	$upload->autoSub = true;

		$upload->subName = array('date','d');

	    $upload->savePath  =      date('Y',time()).'/'.date('m',time()).'/'; // 设置附件上传（子）目录

	    // 上传文件 

	    $info   =   $upload->upload();

	    if(!$info) {// 上传错误提示错误信息
	    	$return=[
	    		'msg' => $upload->getError(),

	    	];
	    	$this->ajaxReturn($return);


	       // $this->error($upload->getError());

	    }else{// 上传成功 获取上传文件信息

	        foreach($info as $file){

				$return = [

					'img' => '/upload/'.$file['savepath'].$file['savename'],
					'msg' => '上传成功',
				];

		    	$water = M('config')->where("inc_type = 'water'")->getField('name,value');
		        if ($water['is_mark']=='1') {
		    	    $image = new \Think\Image(); 
		        	if ($water['mark_type']=='text') {
				    $image->open('.'.$return['img'])->text($water['mark_txt'],'./Public/Home/fonts/msyh.ttf',18,'#000',$water['sel'])->save('.'.$return['img']);	
		        	}else{
		        	$image->open('.'.$return['img'])->water('.'.$water['mark_img'],$water['sel'],$water['mark_degree'])->save('.'.$return['img']); 
		        	}
		        }
				$this->ajaxReturn($return);

	        }

	    }

	} 

	public function fileupload()

	{

	    $upload = new \Think\Upload();// 实例化上传类

	    $upload->maxSize   =     3145728 ;// 设置附件上传大小

	    $upload->exts      =     array('zip', 'rar');// 设置附件上传类型

	    $upload->rootPath  =      './upfile/'; // 设置附件上传根目录

	 	$upload->autoSub = true;

		$upload->subName = array('date','d');

	    $upload->savePath  =      'files'; // 设置附件上传（子）目录

	    // 上传文件 

	    $info   =   $upload->upload();

	    if(!$info) {// 上传错误提示错误信息

	        $this->error($upload->getError());

	    }else{// 上传成功 获取上传文件信息

	        foreach($info as $file){

				$return = [

					'img' => '/upfile/'.$file['savepath'].$file['savename']

				];

				$this->ajaxReturn($return);

	        }

	    }

	} 

	public function delupload()

   {

   		if (isset($_GET['filename'])) {

   			@unlink('.'.$_GET['filename']);exit;

   		}

         $action=isset($_GET['action']) ? $_GET['action'] : null;

         $filename= isset($_GET['filename']) ? $_GET['filename'] : null;

         $filename= trim($filename,'/');

         if($action=='del' && !empty($filename)){

             $size = getimagesize($filename);

             $filetype = explode('/',$size['mime']);

            if($filetype[0]!='image'){

                return false;

                 exit;

             }

            unlink($filename);

            exit;

         }	   

   }   

}