<?php

namespace Home\Controller;

use Think\Controller;

class GoodsController extends BaseController {

    public function _initialize()
    {
        parent::_initialize();
        //$banner0 = D('ad')->get_one(42);
          // dump($banner0);die;
        $catid = I('get.catid',5 OR 101 OR 102);
        $location = D('goods_category')->get_info_pid(0,'sort_order');
        
       

        //$now = D('goods_category')->get_one($catid);
       //dump($now);die;
   

        $data_f = array(
            'catid' => $catid, 
            'now' => $now,
            'location' => $location,
            'banner0' => $banner0,
           // 'cat' => $now,
            );
        $this->assign($data_f);
    }


    public function index(){
       $this->column();
    }

    /**
     * 商品列表页
     */

    public function column(){
        $catid = I('get.catid',0);
        $p = I('get.p',1);
        $model = D('goods');
        $model->total='p_total';
        $data = $model->get_page(8,$p,$catid,'sort desc');
        //dump($data);die;
        $data = [
            'p'=>$p,
        ]+$data;
       //dump($data);die;
        $this->assign($data);
        $this->display('list');
    }

    /**

     * 商品详情页

     * 

     */

    public function page()

    {
    	$id = I('get.goodsid');
        $model = D('goods');
        $hot = $model->get_infos('0 or is_hot=1','sort desc',4);
        //dump($hot);die;
    	$goods = $model->get_detail($id);
       // dump($goods);die;
         $anzhuo = $goods['send_time'];
        $pg = $goods['sale_address'];
      //处理二维码
         $qrcode_path_new = './Public/upload'.'_'.date("Ymdhis").'.png';
        $qrcode_path_new2 = './Public/upload'.'_'.date("Ymdhi").'.png';
            $matrixPointSize = 4;
            $matrixMarginSize = 0;
            $errorCorrectionLevel = M;
            makecode_no_pic($anzhuo,$qrcode_path_new,$matrixPointSize,$matrixMarginSize,$errorCorrectionLevel);
           makecode_no_pic($pg,$qrcode_path_new2,$matrixPointSize,$matrixMarginSize,$errorCorrectionLevel);
           
          /* unlink($qrcode_path_new);
           unlink($qrcode_path_new2);
*/
       // $url2 = qrcode($pg);
          // dump($qrcode_path_new);
            //dump($qrcode_path_new);die;
        $data = [
            'url1'=>$qrcode_path_new,
            'url2'=>$qrcode_path_new2,
            'hot'=>$hot,
            'goods'=>$goods,
            'id'=>$id,
        ];
        $this->assign($data);
    	$this->display('page');
    }
 
   


  /*   * 用户收藏某一件商品

     * @param type $goods_id

     */

    public function collect_goods($goods_id)

    {   if (!session('?user')) {

        $this->ajaxReturn(array('msg'=>'必须登录后才能收藏','status'=>-1));

        }

        $goods_id = I('goods_id');

        $goodsLogic = new \Home\Logic\GoodsLogic();        

        $result = $goodsLogic->collect_goods(session('user.user_id'),$goods_id);

        exit(json_encode($result));

    }

}