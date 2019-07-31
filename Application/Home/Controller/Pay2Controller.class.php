<?php

namespace Home\Controller;

use Think\Controller;

class PayController extends BaseController
{
    public function index33()
   {
        //商户订单号，商户网站订单系统中唯一订单号，必填
        $out_trade_no = '27201'.date('YmdHis',time());
        //订单名称，必填
        //$proName = trim($_POST['WIDsubject']);
        $proName ='订单明细';
        //付款金额，必填
        $total_amount = '0.01';//trim($_POST['WIDtotal_amount']);
        //商品描述，可空
        $body = '27201';//trim($_POST['WIDbody']);
        Vendor('AlipaySDK.aop.AopClient');
        Vendor('AlipaySDK.aop.request.AlipayTradePagePayRequest');
        //请求
        $c = new \AopClient();
        $config = C('ALIPAY');
        $c->gatewayUrl = "https://openapi.alipaydev.com/gateway.do";
        $c->appId = $config['app_id'];
        $c->rsaPrivateKey = $config['merchant_private_key'];
        //$c->format = "json";
        //$c->charset= "UTF-8";
        //$c->signType= "RSA2";
        $c->alipayrsaPublicKey = $config['alipay_public_key'];
        $request = new \AlipayTradePagePayRequest();
        $request->setReturnUrl($config['return_url']);
        $request->setNotifyUrl($config['notify_url']);
        $request->setBizContent("{" .
            "    \"product_code\":\"FAST_INSTANT_TRADE_PAY\"," .
            "    \"subject\":\"$proName\"," .
            "    \"out_trade_no\":\"$out_trade_no\"," .
            "    \"total_amount\":$total_amount," .
            "    \"body\":\"$body\"" .
            "  }");
        $result = $c->pageExecute ($request);
      //  dump($result);die;

      //  $model = M('c_house_order');
   /*     $data = array(
            'product_name'=>$proName,
            'order_num'=>$out_trade_no,
            'total_amount'=>$total_amount,
            'description'=>$body,
            'user_id'=>1,
            'add_time'=>NOW_TIME,
            'up_time'=>NOW_TIME
        );*/
      //  $model->add($data);
        //输出
       // echo $result;
         // $this->assign($data);
        $this->display('index');

    }
}

