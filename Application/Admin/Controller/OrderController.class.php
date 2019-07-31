<?php

/**

 * 

 * @authors Your Name (you@example.org)

 * @date    2017-09-09 10:00:20

 * @version $Id$

 */

namespace Admin\Controller;

use Admin\Logic\OrderLogic;

use Think\AjaxPage;



class OrderController extends BaseController {

    public  $order_status;

    public  $pay_status;

    public  $shipping_status;

    /*

     * 初始化操作

     */

    public function _initialize() {

        parent::_initialize();

        C('TOKEN_ON',false); // 关闭表单令牌验证

        $this->order_status = C('ORDER_STATUS');

        $this->pay_status = C('PAY_STATUS');

        $this->shipping_status = C('SHIPPING_STATUS');

        // 订单 支付 发货状态

        $this->assign('order_status',$this->order_status);

        $this->assign('pay_status',$this->pay_status);

        $this->assign('shipping_status',$this->shipping_status);

    }



    /*

     *订单首页

     */

    public function index(){
        // $condition = I('post.');
        // var_dump($condition);exit;
        $order = M('order')->select();

        $data = [
            'list'=>$order,
        ];

        $this->assign($data);
        $this->display('index');

    }

    /*

     *Ajax首页

     */

    public function ajaxindex(){

        $orderLogic = new OrderLogic();       

        $timegap = I('timegap');

        if($timegap){

            $gap = explode('-', $timegap);

            $begin = strtotime($gap[0]);

            $end = strtotime($gap[1]);

        }

        // 搜索条件

        $condition = array();

        I('consignee') ? $condition['consignee'] = trim(I('consignee')) : false;

        if($begin && $end){

            $condition['add_time'] = array('between',"$begin,$end");

        }

        I('order_sn') ? $condition['order_sn'] = trim(I('order_sn')) : false;

        I('pay_status') != '' ? $condition['pay_status'] = I('pay_status') : false;

        I('pay_code') != '' ? $condition['pay_code'] = I('pay_code') : false;

        

        

        $sort_order = I('order_by','DESC').' '.I('sort');

        $count = M('order')->where($condition)->count();

        $Page  = new AjaxPage($count,20);

        //  搜索条件下 分页赋值

        foreach($condition as $key=>$val) {

            $Page->parameter[$key]   =  urlencode($val);

        }

        $show = $Page->show();

        //获取订单列表

        $orderList = $orderLogic->getOrderList($condition,$sort_order,$Page->firstRow,$Page->listRows);

        $this->assign('orderList',$orderList);

        $this->assign('page',$show);// 赋值分页输出

        $this->display();

    }
    /**

     * 订单详情

     * @param int $id 订单id

     */

    public function detail($order_id){

        $orderLogic = new OrderLogic();

        $order = $orderLogic->getOrderInfo($order_id);

        $orderGoods = $orderLogic->getOrderGoods($order_id);

        $button = $orderLogic->getOrderButton($order);

        // 获取操作记录

        $action_log = M('order_action')->where(array('order_id'=>$order_id))->order('log_time desc')->select();

        $this->assign('order',$order);

        $this->assign('action_log',$action_log);

        $this->assign('orderGoods',$orderGoods);

        $split = count($orderGoods) >1 ? 1 : 0;

        foreach ($orderGoods as $val){

            if($val['goods_num']>1){

                $split = 1;

            }

        }

        $this->assign('split',$split);

        $this->assign('button',$button);

        $this->display();

    }

}

