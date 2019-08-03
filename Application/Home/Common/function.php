<?php
namespace Home\Controller;

use Think\Controller;

function makecode($qrcode_path,$content,$matrixPointSize,$matrixMarginSize,$errorCorrectionLevel,$url){
        /**     参数详情：
         *      $qrcode_path:logo地址
         *      $content:需要生成二维码的内容
         *      $matrixPointSize:二维码尺寸大小
         *      $matrixMarginSize:生成二维码的边距
         *      $errorCorrectionLevel:容错级别
         *      $url:生成的带logo的二维码地址
         * */
        ob_clean ();
        Vendor('phpqrcode.phpqrcode');
        $object = new \QRcode();
        $qrcode_path_new = './Public/Home/images/code'.'_'.date("Ymdhis").'.png';//定义生成二维码的路径及名称
        $object::png($content,$qrcode_path_new, $errorCorrectionLevel, $matrixPointSize, $matrixMarginSize);
        $QR = imagecreatefromstring(file_get_contents($qrcode_path_new));//imagecreatefromstring:创建一个图像资源从字符串中的图像流
        $logo = imagecreatefromstring(file_get_contents($qrcode_path));
        $QR_width = imagesx($QR);// 获取图像宽度函数
        $QR_height = imagesy($QR);//获取图像高度函数
        $logo_width = imagesx($logo);// 获取图像宽度函数
        $logo_height = imagesy($logo);//获取图像高度函数
        $logo_qr_width = $QR_width / 4;//logo的宽度
        $scale = $logo_width / $logo_qr_width;//计算比例
        $logo_qr_height = $logo_height / $scale;//计算logo高度
        $from_width = ($QR_width - $logo_qr_width) / 2;//规定logo的坐标位置
        imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
        /**     imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )
         *      参数详情：
         *      $dst_image:目标图象连接资源。
         *      $src_image:源图象连接资源。
         *      $dst_x:目标 X 坐标点。
         *      $dst_y:目标 Y 坐标点。
         *      $src_x:源的 X 坐标点。
         *      $src_y:源的 Y 坐标点。
         *      $dst_w:目标宽度。
         *      $dst_h:目标高度。
         *      $src_w:源图象的宽度。
         *      $src_h:源图象的高度。
         * */
        Header("Content-type: image/png");
        //$url:定义生成带logo的二维码的地址及名称
        imagepng($QR,$url);
    }



    function makecode_no_pic($content,$qrcode_path_new,$matrixPointSize,$matrixMarginSize,$errorCorrectionLevel){
        ob_clean ();
        Vendor('phpqrcode.phpqrcode');
        $object = new \QRcode();
        $object::png($content,$qrcode_path_new, $errorCorrectionLevel, $matrixPointSize, $matrixMarginSize);
    }
?>