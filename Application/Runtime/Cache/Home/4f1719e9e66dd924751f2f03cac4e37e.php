<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html class="" >
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/product.css">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
<meta name="format-detection" content="telephone=no">


<meta name="generator" content="MetInfo 6.1.3" data-variable="" data-user_name="">

<link rel="stylesheet" type="text/css" href="/Public/Home/css/basic.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/index_cn.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/news.css">
<style>
body{
    background-color: !important;font-family: !important;}
</style>
<!--[if lte IE 9]>
<script src="https://show.metinfo.cn/m/mui030/351/public/ui/v2/static/js/lteie9.js"></script>
<![endif]-->
<script src="/Public/Home/js/met_temdemo.js"></script>
</head>
<!--[if lte IE 8]>
<div class="text-xs-center m-b-0 bg-blue-grey-100 alert">
    <button type="button" class="close" aria-label="Close" data-dismiss="alert">
        <span aria-hidden="true">×</span>
    </button>
    你正在使用一个 <strong>过时</strong> 的浏览器。请 <a href=https://browsehappy.com/ target=_blank>升级您的浏览器</a>，以提高您的体验。</div>
<![endif]-->
<body>
                <header class="head_nav_met_11_4-header" m-id='42' m-type="head_nav">
    <div class="top-box ulstyle">
        <div class="container">
            <div class="row">
                <div class="pull-md-left">
                    <i class="welcome-img"></i>
                    <span>欢迎来到<?php echo ($config2["company_name"]); ?></span>
                </div>
                <div class="pull-md-right top-social">
                                            <li>
                        <span data-plugin="webuiPopover" data-trigger="hover" data-animation="fade" data-placement='bottom' data-width='150' data-padding='0' data-content="<img src=<?php echo ($weixin[0]["ad_code"]); ?>  style='width: 146px;display:block;'>">
                                <i class="fa fa-weixin m-r-10" style="font-size:16px;"></i>
                                <a>我的微信</a>
                                <i class="fa fa-chevron-down" aria-hidden="true" ></i>
                        </span>
                    </li>
                                                                <li>
                        <span data-plugin="webuiPopover" data-trigger="hover" data-animation="fade" data-placement='bottom' data-width='136' data-padding='0' 
                        data-content="<div style='width: 130px;display:block;padding:15px 15px 5px 15px;'>
                        <p class='m-b-5 contact-p'>销售热线<p class='contact-num'><b><?php echo ($config2["phone"]); ?></b></p></p>
                        <p class='m-b-5 contact-p'>个人服务热线<p class='contact-num'><b><?php echo ($config2["mobile"]); ?></b></p></p></div>">
                        <i class="fa fa-phone" style="font-size:18px;"></i><a>联系<?php echo ($config2["contact"]); ?></a> <i class="fa fa-chevron-down" aria-hidden="true"></i></span>
                    </li>
                                                                <li>
                        <span>
                            <i class="fa fa-qq"></i>
                            <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config2["qq"]); ?>&site=qq&menu=yes" >
                            QQ咨询</a>
                        </span>
                    </li>
                                    </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default box-shadow-none head_nav_met_11_4">
        <div class="container">
            <div class="row">
                <div class="logo-box clearfix">
                    <h1 hidden><?php echo ($config2["keyword"]); ?></h1>
                    <div class="navbar-header pull-xs-left">
                        <a href="/" class="met-logo vertical-align block pull-xs-left p-y-5" title="<?php echo ($config2["keyword"]); ?>">
                            <div class="vertical-align-middle">
                                <img src="<?php echo ($config2["store_logo"]); ?>" alt="<?php echo ($config2["keyword"]); ?>"></div>
                        </a>
                    </div>
<!-- 会员注册登录 -->
                    <!-- 会员注册登录 -->
                    <div class="pull-md-right">
                        <p>你只需努力，其他一切交给天毅！</p>
                    </div>
                 </div>
                <button type="button" class="navbar-toggler hamburger hamburger-close collapsed  met-nav-toggler" data-target="#met-nav-collapse" data-toggle="collapse">
                    <span class="sr-only"></span>
                    <span class="hamburger-bar"></span>
                </button>

                <div class="nav-box clearfix">
                    <!-- 侧边栏导航 -->
                    <div class="sidebar-nav">
                        <span class="sn-title">服务&分类<i class="fa fa-caret-down"></i></span>
                        <div class="sn-box">
                            <ul class="sn-list ulstyle     sn-open" data-hex="#1c90d4|0.88">

<?php if(is_array($tree)): foreach($tree as $key=>$v): ?><li class="sn-li">
                                    <div class="nav-left">
                                        <span class="column-1">
                                           <i class="fa <?php echo ($v["en_name"]); ?>"></i>
                                            <a href="" title="$m.title" target='_self'><?php echo ($v["name"]); ?></a>
                                            <i class="fa fa-angle-right"></i>
                                        </span>
                                        <span class="column-2">
                                            <?php if(is_array($v["son"])): foreach($v["son"] as $key=>$vo): ?><h3><a href="" title="" target='_self'><?php echo ($vo["name"]); ?></a></h3><?php endforeach; endif; ?>
                                    </span>
                                    </div>
                                    <!-- 第一个右侧边栏 -->
                                    <div class="nav-right">
                                        <div class="main">
                                            <div class="left" style="background-image:url();">

<?php if(is_array($v["son"])): foreach($v["son"] as $key=>$vo): ?><div class="column-2-list">
                                                  <!--第一个 二级分类 -->
                                                    <span class="column-2-title">
                                                        <a href="<?php echo U('Goods/index',array('cat_id'=>$vo['id']));?>" title="" target='_self'>
                                                             <i class="fa fa-angle-right"></i>
                                                            <?php echo ($vo["name"]); ?>                                                 </a>
                                                    </span>

                                                    <div class="column-2-content">
                                                        <ul class="clearfix ulstyle">
                                      <?php if(is_array($vo["son"])): foreach($vo["son"] as $key=>$va): ?><li>
                                            <a href="<?php echo U('Goods/index',array('cat_id'=>$va['id']));?>" title="" target=_self>
                                                                <?php echo ($va["name"]); ?>                                                                </a>
                                                            </li><?php endforeach; endif; ?>
                                                    
                                                    </ul>
                                                    </div>
                                                </div><?php endforeach; endif; ?>

                                        </div>
                                    </div>
                                </li><?php endforeach; endif; ?>


                             
                                   
                                                                                    </ul>
                        </div>
                    </div>


    <div class="collapse navbar-collapse navbar-collapse-toolbar  p-0" id="met-nav-collapse">
     <ul class="nav navbar-nav navlist">
        <li class='nav-item'><a href="/" title="网站首页" data-dropname="网站首页" class="nav-link
                                                            active
                                                        ">网站首页</a>
                        </li>


                                  
                                                                                 
                <!--         <li class='nav-item m-l-0'>
                            <a href="" title="产品服务" class="nav-link " data-dropname="产品服务" target='_self'>
                            <span style="position: relative;">产品服务                                                               <i class="hoticon" style="background-image: url();"></i>
                                                        </span>
                            </a>
                        </li> -->

                        <?php if(is_array($nav)): foreach($nav as $key=>$v): ?><li class='nav-item m-l-0'>
                            <a href="<?php echo ($v["url"]); ?>" title="<?php echo ($v["name"]); ?>" class="nav-link " data-dropname="案例中心" target='_blank'>
                            <span style="position: relative;"><?php echo ($v["name"]); ?><i class="hoticon" style="background-image: url();"></i>
                                                        </span>
                            </a>
                        </li><?php endforeach; endif; ?>
                                
           
<!--多语言-->
                    </ul>
                </div>
        </div>

            </div>
        </div>
    </nav>
    </header>

    

            <section class="banner_met_11_4-warrper">
                    <div class="banner_met_11_4 page-bg"  m-id='2' m-type="banner">
                <div class="slick-slide">
            <img class="cover-image" src="<?php echo ($banner2["ad_code"]); ?>" srcset='<?php echo ($banner2["ad_code"]); ?>' sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0' data-fade="false" data-autoplayspeed=4000 data-speed="1000">
                                        </div>
            </div>
</section>


            <div class="subcolumn_nav_met_16_1      border-bottom1" m-id='11' m-type='nocontent'>
  <div class="">
    <div class="subcolumn-nav text-xs-center">
      <ul class="subcolumn_nav_met_16_1-ul m-b-0 p-y-10 p-x-0 ulstyle">
                              <li>
            <a href="<?php echo U('');?>"  title="全部"
                            class="active"
                        >全部</a>
          </li>
                         
                          
        
                                    <li class="dropdown">
          <a href="https://show.metinfo.cn/m/mui030/351/product/product.php?class2=12" target='_self' title="父母保险" class="dropdown-toggle " data-toggle="dropdown">分类导航</a>
          <div class="dropdown-menu animate">
                              <a href="https://show.metinfo.cn/m/mui030/351/product/product.php?class2=12" target='_self' title="全部" class='dropdown-item '>全部</a>
                                    <a href="https://show.metinfo.cn/m/mui030/351/product/product.php?class3=23" target='_self' title="老友安心" class='dropdown-item '>老友安心</a>
                        <a href="https://show.metinfo.cn/m/mui030/351/product/product.php?class3=24" target='_self' title="不倒翁" class='dropdown-item '>不倒翁</a>
                      </div>
        </li>
                
                              </ul>
    </div>
                <div class="product-search">
      <form method="get" action="#">
        <input type="hidden" name='lang' value="cn">
        <input type="hidden" name='class1' value="1">
        <input type="hidden" name='class2' value="">
        <input type="hidden" name='class3' value="">
        <input type="hidden" name='search' value="search">
        <input type="hidden" name='order' value="com">
        <div class="form-group">
          <div class="input-search">
            <button type="submit" class="input-search-btn">
              <i class="icon wb-search" aria-hidden="true"></i>
            </button>
            <input
              type="text"
              class="form-control"
              name="content"
              value=""
              placeholder="search"
            >
          </div>
        </div>
      </form>
    </div>
      </div>
</div>
                
  <!--           <div class="para_search_met_16_1" m-id='15'>
  <div class="    container">
    <div class="row">
                                                              <div class="clearfix m-y-10">
          <ul class="order inline-block p-0 m-y-10 m-r-10">
                            <li class="order-list inline-block m-r-10"><a href="https://show.metinfo.cn/m/mui030/351/product/index.php?class1=1&page=&search=search&order=com" class="p-x-10 p-y-5">推荐<i class="icon wb-triangle-up" aria-hidden="true"></i></a></li>
                    <li class="order-list inline-block m-r-10"><a href="https://show.metinfo.cn/m/mui030/351/product/index.php?class1=1&page=&search=search&order=hit" class="p-x-10 p-y-5">热门<i class="icon wb-triangle-up" aria-hidden="true"></i></a></li>
                    <li class="order-list inline-block m-r-10"><a href="https://show.metinfo.cn/m/mui030/351/product/index.php?class1=1&page=&search=search&order=new" class="p-x-10 p-y-5">最新<i class="icon wb-triangle-up" aria-hidden="true"></i></a></li>
                    </ul>
                      </div>
          </div>
  </div>
</div> -->


        <div class="product_list_page_met_16_1 met-product animsition     type-1        " m-id='10'>
    <div class="    container popular-product left">
      <!-- sidebar -->
                    <!-- /sidebar -->
                    <ul class="           blocks-xs-2               blocks-md-2 blocks-lg-4 blocks-xxl-4  met-pager-ajax imagesize cover met-product-list met-grid" id="met-grid" data-scale='500x900'>
                        <?php if(is_array($list)): foreach($list as $key=>$v): ?><li     class="shown">
                <div class="card card-shadow">
                  <figure class="card-header cover">
                    <a href="<?php echo U('Home/'.CONTROLLER_NAME.'/page',array('goodsid'=>$v['goods_id']));?>" title="<?php echo ($v["goods_name"]); ?>" target=_self>
                      <img class="cover-image"     data-original="<?php echo ($v["original_img"]); ?>" alt="<?php echo ($v["goods_name"]); ?>" height='100'>
                    </a>
                  </figure>
                  <h4 class="card-title m-0 p-x-10 font-size-16 text-xs-center">
                    <a href="<?php echo U('Home/'.CONTROLLER_NAME.'/page',array('goodsid'=>$v['goods_id']));?>" title="<?php echo ($v["goods_name"]); ?>" class="block" target=_self><?php echo ($v["goods_name"]); ?></a>
                    <p class='m-b-0 m-t-5 red-600'></p>
                  </h4>
                </div>
              </li><?php endforeach; endif; ?>                                                        
         
         <!--        <li>
                <div class="card card-shadow">
                  <figure class="card-header cover">
                    <a href="https://show.metinfo.cn/m/mui030/351/product/showproduct.php?id=6" title="逸享无忧意外伤害保险" target=_self>
                      <img class="cover-image"     src="https://images.metinfo.cn/m/mui030/351/upload/mui030/351/thumb_src/900_500/1517973443.jpg" alt="逸享无忧意外伤害保险" height='100'>
                    </a>
                  </figure>
                  <h4 class="card-title m-0 p-x-10 font-size-16 text-xs-center">
                    <a href="https://show.metinfo.cn/m/mui030/351/product/showproduct.php?id=6" title="逸享无忧意外伤害保险" class="block" target=_self>逸享无忧意外伤害保险</a>
                    <p class='m-b-0 m-t-5 red-600'></p>
                  </h4>
                </div>
              </li> -->

                 </ul>

                  <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                    <?php echo ($page); ?>
         <!--         <div class='met_pager'><span class='PreSpan'>上一页</span><a href='https://show.metinfo.cn/m/mui030/351/product/product.php?class1=1' class='Ahover'>1</a><a href='https://show.metinfo.cn/m/mui030/351/product/index.php?class1=1&page=2' >2</a><a href='https://show.metinfo.cn/m/mui030/351/product/index.php?class1=1&page=2' class='NextA'>下一页</a>
          <span class='PageText'>转至第</span>
          <input type='text' id='metPageT' data-pageurl='index.php?lang=cn&class1=1&page=||2' value='1' />
          <input type='button' id='metPageB' value='页' />
      </div>
       -->
            </div>

        <div class="met_pager met-pager-ajax-link hidden-md-up" data-plugin="appear" data-animate="slide-bottom" data-repeat="false" m-type="nosysdata">
            <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda" data-style="slide-left" data-url="" data-page="1">
                <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                            </button>
        </div>
          <!-- sidebar -->
                        </div>
        </div>
       </main>
    <!-- /sidebar -->


        <section class="foot_nav_met_11_4     " m-id='3' m-type="foot_nav">
    <div class="container">
        <div class="title-box text-xs-center">
            <div class="head">
                <h2 class="title"><?php echo ($config2["company_name"]); ?></h2>
                <p class="desc"></p>
            </div>
        </div>
        <div class="foot-box clearfix">
            <div class="foot-input col-md-8 text-xs-left">


<!-- 
                <div class="met-foot-feedback clearfix">
                        <form method='POST' class="met-form met-form-validation" enctype="multipart/form-data" action='https://show.metinfo.cn/m/mui030/351/feedback1/index.php?action=add&lang=cn'>
    <input type='hidden' name='id' value="32" />
    <input type='hidden' name='lang' value="cn" />
    <input type='hidden' name='fdtitle' value='' />
    <input type='hidden' name='referer' value='https://show.metinfo.cn/m/mui030/351/' />    <div class='form-group'><select name='para24' class='form-control' ><option value=''>给谁投保</option><option value='本人' >本人</option><option value='配偶' >配偶</option><option value='父母' >父母</option><option value='子女' >子女</option><option value='车辆' >车辆</option><option value='财产' >财产</option></select></div>
    <div class='form-group'><select name='para25' class='form-control' ><option value=''>选择险种</option><option value='健康险' >健康险</option><option value='意外险' >意外险</option><option value='理财险' >理财险</option><option value='车辆险' >车辆险</option><option value='财产险' >财产险</option></select></div>
    <div class='form-group'><input name='para26' class='form-control' type='text' placeholder='您的年龄 '  /></div>
    <div class='form-group'><select name='para27' class='form-control' ><option value=''>保费预算</option><option value='1~5万元' >1~5万元</option><option value='5~20万元' >5~20万元</option><option value='20~50万元' >20~50万元</option><option value='50万元以上' >50万元以上</option></select></div>
    <div class='form-group'><textarea name='para28' class='form-control'  placeholder='保障需求 ' rows='5'></textarea></div>
    <div class='form-group'><div class='input-group input-group-icon'>
          <input name='code' type='text' class='form-control input-codeimg' placeholder='验证码' required data-fv-message='不能为空'>
          <span class='input-group-addon p-5'>
          <img src='https://show.metinfo.cn/m/mui030/351/app/system/entrance.php?m=include&c=ajax_pin&a=dogetpin' id='getcode' title='看不清？点击更换验证码' align='absmiddle' role='button'>
          </span>
        </div>
      </div>


      <div class="form-group m-b-0">
        <button type="submit" class="btn btn-primary btn-lg btn-block btn-squared">提交</button>
      </div>
    </form>                </div>
 -->
  <div id="map" class="col-lg-12 col-md-12" style="height:230px;margin-bottom:20px;"></div>
 <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=6d88e38ab7f507ee19cec46443691d95"></script>
         
            <script type="text/javascript">
  
            // 百度地图API功能
            var map = new BMap.Map("map");    // 创建Map实例
            var point = new BMap.Point(113.323793,23.133031);   //坐标拾取网址：http://api.map.baidu.com/lbsapi/getpoint/index.html
        
            var marker = new BMap.Marker(point);  // 创建标注
            var mapStyle = {style:"normal"};
            map.setMapStyle(mapStyle);
  
            var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
            var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件
        
            marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
            map.centerAndZoom(point, 13);  // 初始化地图,设置中心点坐标和地图级别
            map.addOverlay(marker);               // 将标注添加到地图中
            map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
            map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
            map.setCurrentCity("广州");          // 设置地图显示的城市 此项是必须设置的
          
        
        
            window.onresize = function(){
        
                map.centerAndZoom(point, 15);  // 重置窗口的时候 重新获取中心点坐标的位置
        
            }
  
          map.addControl(top_left_control);
          map.addControl(top_left_navigation);
          /*map.addControl(top_right_navigation);  */

        </script>
            </div>


            <div class="foot-info col-md-4">
                <div class="foot-img">
                    <img data-original="" alt="">
                </div>
                <div class="foot-tel">
                    <span>咨询热线：</span>
                    <a href="<?php echo ($config2["phone"]); ?>"><?php echo ($config2["phone"]); ?></a>
                    <p>服务QQ：<?php echo ($config2["qq"]); ?>  服务时间：0：00-24:00</p>
                    <p class="more-info">您也可以拨打:<?php echo ($config2["mobile"]); ?><br/>服务时间：7x24小时</p>
                </div>
            </div>
        </div>
        <!--友情链接-->    
    </div>

</section>
                                               <footer class="link_met_11_1 text-xs-center" m-id='5' m-type="link">
            <div class="container p-y-15">
                <ul class="breadcrumb p-0 link-img m-0">
                    <li class='breadcrumb-item'>友情链接 :</li>
                    <?php if(is_array($flink)): foreach($flink as $key=>$v): ?><li class='breadcrumb-item     split'>
                            <a href="<?php echo ($v["link_url"]); ?>" title="<?php echo ($v["link_name"]); ?>"  target="_blank">
                                                                        <span><?php echo ($v["link_name"]); ?></span>
                                                            </a>
                        </li><?php endforeach; endif; ?>  
                                    </ul>
            </div>
        </footer>
    
        <footer class='foot_info_met_16_1 met-foot p-y-20 border-top1' m-id='4' m-type='foot'>
  <div class="container text-xs-center">
            <p><?php echo ($config2["copyright"]); ?>  <a href="http://www.miibeian.gov.cn" target="_blank" title="备案号"><?php echo ($config2["record_no"]); ?></a> </p>
              
    <ul class="met-langlist p-0">
                      </ul>
  </div>
</footer>

<button type="button" class="btn btn-icon btn-primary btn-squared back_top_met_16_1 met-scroll-top" hidden m-id='6' m-type='nocontent'>
  <i class="icon wb-chevron-up" aria-hidden="true"></i>
</button>

<input type="hidden" name="met_lazyloadbg" value="">
<script src="/Public/Home/js/basic.js"></script>
<script>
var metpagejs="/Public/Home/js/index_cn.js";
if(typeof jQuery != "undefined"){
    metPageJs(metpagejs);
}else{
    var metPageInterval=setInterval(function(){
        if(typeof jQuery != "undefined"){
            metPageJs(metpagejs);
            clearInterval(metPageInterval);
        }
    },50)
}
</script>
<script src="/Public/Home/js/lang_json_cn.js"></script>
</body>

</html>