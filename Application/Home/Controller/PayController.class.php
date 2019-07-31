<?php
namespace Home\Controller;
use Think\Controller;

class PayController extends Controller{
       //在类初始化方法中，引入相关类库    
       public function _initialize() {

            //vendor('AlipaySDK.config.php');
            vendor('AlipaySDK.index.php');
            vendor('AlipaySDK.notify_url.php');
            Vendor('AlipaySDK.aop.AopClient');
            Vendor('AlipaySDK.aop.request.AlipayTradePagePayRequest');
            /*service.AlipayTradeService*/
            vendor('AlipaySDK.aop.AopClient.php');
            vendor('AlipaySDK.buildermodel.AlipayTradePagePayContentBuilder.php');
    }


  public  function index(){
        dump($goods);die;
        $this->display();
    }

     function alipay(){

     /*   vendor('AlipaySDK.config.php');
        vendor('AlipaySDK.service.AlipayTradeService.php');
        vendor('AlipaySDK.buildermodel.AlipayTradePagePayContentBuilder.php');*/
 /* require_once dirname(dirname(__FILE__)).'/config.php';
require_once dirname(__FILE__).'/service/AlipayTradeService.php';
require_once dirname(__FILE__).'/buildermodel/AlipayTradePagePayContentBuilder.php';
*/
    //商户订单号，商户网站订单系统中唯一订单号，必填
    $out_trade_no = trim($_POST['WIDout_trade_no']);

    //订单名称，必填
    $subject = trim($_POST['WIDsubject']);

    //付款金额，必填
    $total_amount = trim($_POST['WIDtotal_amount']);

    //商品描述，可空
    $body = trim($_POST['WIDbody']);

    //构造参数
    $payRequestBuilder = new AlipayTradePagePayContentBuilder();
    $payRequestBuilder->setBody($body);
    $payRequestBuilder->setSubject($subject);
    $payRequestBuilder->setTotalAmount($total_amount);
    $payRequestBuilder->setOutTradeNo($out_trade_no);

    $aop = new AlipayTradeService($config);

    /**
     * pagePay 电脑网站支付请求
     * @param $builder 业务参数，使用buildmodel中的对象生成。
     * @param $return_url 同步跳转地址，公网可以访问`
     * @param $notify_url 异步通知地址，公网可以访问
     * @return $response 支付宝返回的信息
    */
    $response = $aop->pagePay($payRequestBuilder,$config['return_url'],$config['notify_url']);

    //输出表单
    var_dump($response);

     }



   public function aalipay(){
      
//商户订单号，商户网站订单系统中唯一订单号，必填

        $out_trade_no = '27201'.date('YmdHis',time());

        //订单名称，必填 trim($_POST['WIDsubject'])

        $proName =trim($_POST['WIDsubject']);
        $total_amount=trim($_POST['WIDtotal_amount']);
       // dump($total_amount);die;

        //付款金额，必填

        $total_amount = trim($_POST['WIDtotal_amount']);//;

        //商品描述，可空

        $body = trim($_POST['WIDbody']);;//



        //请求

        $c = new \AopClient();

        $config = C('alipay');

        $c->gatewayUrl = "https://openapi.alipaydev.com/gateway.do";

        $c->appId = $config['app_id'];

        $c->rsaPrivateKey = $config['merchant_private_key'];

        $c->format = "json";

        $c->charset= "UTF-8";

        $c->signType= "RSA2";


        $c->alipayrsaPublicKey = $config['alipay_public_key'];
       // dump($c);die;

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

      /*  $model = M('c_house_order');

        $data = array(

            'product_name'=>$proName,

            'order_num'=>$out_trade_no,

            'total_amount'=>$total_amount,

            'description'=>$body,

            'user_id'=>1,

            'add_time'=>NOW_TIME,

            'up_time'=>NOW_TIME

        );

        $model->add($data);*/
        echo $result;
         }


         public function notify_url(){
           // require_once 'config.php';
           // require_once 'pagepay/service/AlipayTradeService.php';

            $arr=$_POST;
            $alipaySevice = new AlipayTradeService($config); 
            $alipaySevice->writeLog(var_export($_POST,true));
            $result = $alipaySevice->check($arr);

/* 实际验证过程建议商户添加以下校验。
1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
4、验证app_id是否为该商户本身。
*/
if($result) {//验证成功
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //请在这里加上商户的业务逻辑程序代

    
    //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    
    //获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
    
    //商户订单号

    $out_trade_no = $_POST['out_trade_no'];

    //支付宝交易号

    $trade_no = $_POST['trade_no'];

    //交易状态
    $trade_status = $_POST['trade_status'];


    if($_POST['trade_status'] == 'TRADE_FINISHED') {

        //判断该笔订单是否在商户网站中已经做过处理
            //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
            //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
            //如果有做过处理，不执行商户的业务程序
                
        //注意：
        //退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
    }
    else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
        //判断该笔订单是否在商户网站中已经做过处理
            //如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
            //请务必判断请求时的total_amount与通知时获取的total_fee为一致的
            //如果有做过处理，不执行商户的业务程序            
        //注意：
        //付款完成后，支付宝系统发送该交易状态通知
    }
    //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
    echo "success"; //请不要修改或删除
}else {
    //验证失败
    echo "fail";

}
         }


         public function return_url(){
           // require_once("config.php");
//require_once 'pagepay/service/AlipayTradeService.php';


            $arr=$_GET;
            $alipaySevice = new AlipayTradeService($config); 
            $result = $alipaySevice->check($arr);

/* 实际验证过程建议商户添加以下校验。
1、商户需要验证该通知数据中的out_trade_no是否为商户系统中创建的订单号，
2、判断total_amount是否确实为该订单的实际金额（即商户订单创建时的金额），
3、校验通知中的seller_id（或者seller_email) 是否为out_trade_no这笔单据的对应的操作方（有的时候，一个商户可能有多个seller_id/seller_email）
4、验证app_id是否为该商户本身。
*/
if($result) {//验证成功
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    //请在这里加上商户的业务逻辑程序代码
    
    //——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
    //获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表

    //商户订单号
    $out_trade_no = htmlspecialchars($_GET['out_trade_no']);

    //支付宝交易号
    $trade_no = htmlspecialchars($_GET['trade_no']);
        
    echo "验证成功<br />支付宝交易号：".$trade_no;

    //——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
    
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}
else {
    //验证失败
    echo "验证失败哈哈";
}
         }

     }


