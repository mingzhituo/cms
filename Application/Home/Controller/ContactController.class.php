<?php

namespace Home\Controller;

use Think\Controller;

class ContactController extends BaseController {



	public function index(){
       $this->page();
    }

    public function page(){
    	$catid= I('get.catid',20);
        $now = D('ArticleCat')->get_one($catid);
        $location = D('ArticleCat')->get_infos_pid($now['parent_id'],'sort_order');

    	$nbanner = D('ad')->get_one(44);
    	$this->assign('nbanner',$nbanner);
    	$this->assign('now',$now);
    	$this->assign('location',$location);
        $this->display('page');
    }

    public function createimg(){
        $realname = "姓名";
        $schoolname = "学校";  
        $idcard = "身份证号"; 

        $image = imagecreatefrompng('/Public/images/315.png');           // 证书模版图片文件的路径 
        $red = imagecolorallocate($image,00,00,00);                 // 字体颜色

// imageTTFText("Image", "Font Size", "Rotate Text", "Left Position","Top Position", "Font Color", "Font Name", "Text To Print");
imageTTFText($image, 50, 0, 1110, 1025, $red, '字体路径',$realname);
imageTTFText($image, 50, 0, 1000, 1023, $red, '字体路径', $schoolname);
imageTTFText($image, 55, 0, 900, 810, $red, '字体路径（/usr/share/fonts/truetype/ttf-dejavu/simhei.ttf）', $idcard);

 /* 直接显示在浏览器 */
header('Content-type: image/png;');
ImagePng($image);
//imagedestroy($image);


/* 如果需要保存 */
$filename = 'certificate_aadarsh.png';
ImagePng($image, $filename);
imagedestroy($image);


/* 如果需要下载 */
$filename = 'certificate_aadarsh.png';
ImagePng($image,$filename);
header('Pragma: public');
header('Cache-Control: public, no-cache');
header('Content-Type: application/octet-stream');
header('Content-Length: ' . filesize($filename));
header('Content-Disposition: attachment; filename="' .
 basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
readfile($filename);
imagedestroy($image);

    }



}