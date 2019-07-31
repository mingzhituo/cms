<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html class="">
  <head>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/news_cn.css">
   <meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0,minimal-ui">
<meta name="format-detection" content="telephone=no">
<meta header


<meta name="generator" content="" data-variable=""
data-user_name="">

<link rel="stylesheet" type="text/css" href="/Public/Home/css/basic.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/index_cn.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/news_cn.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/shownews_cn.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/show_cn.css">
<link rel="stylesheet" type="text/css" href="/Public/Home/css/product_cn.css">
<link href="https://cdn.bootcss.com/font-awesome/5.10.0-11/css/all.css" rel="stylesheet">
<style>
body{
    background-color:#ffffff !important;font-family: !important;}
</style>
        <!-- https://mb.mituo.cn/mui618/|cn|cn|mui618|10001|10001|0 [if lte IE 9]>
<script src="/Public/Home/js/lteie9.js"></script>
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
    <body class="met-navfixed" style="padding-top: 100px;">
        <div hidden>
            <p>后台-营销-SEO-头部优化文字处修改</p>
        </div>
        <header class='head_nav_met_16_3_36 met-head navbar-fixed-top' m-id='36' m-type='head_nav'>
            <div id="header" class="    header-fixed">
                <div class="container">
                    <ul class="head-list ulstyle clearfix p-l-0">
                        <li class="left tel">
                            <img src="" alt="">
                            <span>联系电话：</span>
                            <em><?php echo ($config2["mobile"]); ?></em>
                        </li>
                        <!-- 右边的边框 -->
                        <li class="right">
                            <ul>
                                <li>
                                    <span>资深专业团队</span>
                                </li>
                                <li>
                                    <span>专注知识产权行业10余年</span>
                                </li>
                                <li>
                                    <span>500余家业内资深合作伙伴</span>
                                </li>
                                <li>
                                    <span>全国3000多个成功案例</span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-default box-shadow-none head_nav_met_16_3_36">
                <div class="container">
                    <div class="row nav-height">


                        <h1 hidden>知识产权服务公司</h1>


                        <!-- logo -->
                        <div class="navbar-header pull-xs-left  asssd">
                            <a href="/" class="met-logo vertical-align block pull-xs-left p-y-5" title="知识产权服务公司">
                                <div class="vertical-align-middle">
                                    <img src="<?php echo ($config2["store_logo"]); ?>" alt="<?php echo ($config2["store_logo"]); ?>"></div>
                                </a>
                            </div>



                            <!-- logo -->
                            <button type="button" class="navbar-toggler hamburger hamburger-close collapsed p-x-5 head_nav_met_16_3_36-toggler"
                            data-target="#head_nav_met_16_3_36-collapse" data-toggle="collapse">
                            <span class="sr-only"></span>
                            <span class="hamburger-bar"></span>
                        </button>


                        <!-- 导航 -->
                        <div class="collapse navbar-collapse navbar-collapse-toolbar pull-md-right p-0" id="head_nav_met_16_3_36-collapse">
                            <ul class="nav navbar-nav navlist">


                                <li class='nav-item'>
                                    <a href="/" title="网站首页" class="nav-link
                                    active
                                    ">网站首页</a>
                                </li>

                                <li class="nav-item dropdown m-l-0">
                                    <a href="<?php echo U('Goods/index');?>" target='_self' title="" class="nav-link dropdown-toggle "  data-toggle="dropdown" data-hover="dropdown" 0>
                                    业务展示</a>


                                    <div class="dropdown-menu dropdown-menu-right animate two-menu">
                                        <?php if(is_array($tree)): foreach($tree as $key=>$vo): ?><a href="<?php echo U('Goods/index',array('id'=>$vo['id']));?>" target='_self' 0 title="<?php echo ($vo["name"]); ?>" class='dropdown-item hassub '><?php echo ($vo["name"]); ?></a><?php endforeach; endif; ?>
                                    </div>
                                </li>

<!--  data-toggle="dropdown"  dropdown-toggle -->
                                <?php if(is_array($nav)): foreach($nav as $key=>$v): ?><li class="nav-item dropdown m-l-0">
                                    <a href="<?php echo ($v["url"]); ?>" target='_self' title="" class="nav-link "  data-hover="dropdown" 0>
                                    <?php echo ($v["name"]); ?></a>

                                </li><?php endforeach; endif; ?>
                           
                          <!--       <?php if(is_array($artTree)): foreach($artTree as $key=>$v): ?><li class="nav-item dropdown m-l-0">
                                  <a href="<?php echo ($v["cat_alias"]); ?>" target='_self' title="" class="nav-link dropdown-toggle "
                                  data-toggle="dropdown" data-hover="dropdown" 0>
                              <?php echo ($v["cat_name"]); ?></a>
                          
                          
                              <div class="dropdown-menu dropdown-menu-right animate two-menu">
                                  <?php if(is_array($v['son'])): foreach($v['son'] as $key=>$vo): ?><a href="<?php echo ($v["cat_alias"]); ?>" target='_self' 0 title="<?php echo ($vo["cat_name"]); ?>" class='dropdown-item hassub '><?php echo ($vo["cat_name"]); ?></a><?php endforeach; endif; ?>
                              </div>
                          </li><?php endforeach; endif; ?> -->

                                  <!--   <li class='nav-item m-l-0'>
                                      <a href="https://mb.mituo.cn/mui618/img1/" target='_self' 0 title="专业团队" class="nav-link ">专业团队</a>
                                  </li>
                                  <li class="nav-item dropdown m-l-0">
                                      <a href="https://mb.mituo.cn/mui618/news/" target='_self' title="新闻动态" class="nav-link dropdown-toggle "
                                       data-toggle="dropdown" data-hover="dropdown" 0>
                                          新闻动态</a>
                                      <div class="dropdown-menu dropdown-menu-right animate two-menu">
                                          <a href="https://mb.mituo.cn/mui618/news/" target='_self' 0 title="全部" class='dropdown-item nav-parent hidden-lg-up'>全部</a>
                                          <a href="https://mb.mituo.cn/mui618/news/news.php?class2=11" target='_self' 0 title="最新政策解读" class='dropdown-item hassub '>最新政策解读</a>
                                          <a href="https://mb.mituo.cn/mui618/news/news.php?class2=12" target='_self' 0 title="知识干货" class='dropdown-item hassub '>知识干货</a>
                                          <a href="https://mb.mituo.cn/mui618/news/news.php?class2=13" target='_self' 0 title="行业资讯" class='dropdown-item hassub '>行业资讯</a>
                                          <a href="https://mb.mituo.cn/mui618/news/news.php?class2=14" target='_self' 0 title="公司动态" class='dropdown-item hassub '>公司动态</a>
                                      </div>
                                  </li>
                                  
                                  
                                  <li class="nav-item dropdown m-l-0">
                                      <a href="https://mb.mituo.cn/mui618/news1/" target='_self' title="常见问题" class="nav-link dropdown-toggle "
                                       data-toggle="dropdown" data-hover="dropdown" 0>
                                          常见问题</a>
                                      <div class="dropdown-menu dropdown-menu-right animate two-menu">
                                          <a href="https://mb.mituo.cn/mui618/news1/" target='_self' 0 title="全部" class='dropdown-item nav-parent hidden-lg-up'>全部</a>
                                          <a href="https://mb.mituo.cn/mui618/news1/news.php?class2=8" target='_self' 0 title="知识产权" class='dropdown-item hassub '>知识产权</a>
                                         
                                      </div>
                                  </li>
                                  
                                  
                                  <li class="nav-item dropdown m-l-0">
                                      <a href="https://mb.mituo.cn/mui618/about/" target='_self' title="关于我们" class="nav-link dropdown-toggle "
                                       data-toggle="dropdown" data-hover="dropdown" 0>
                                          关于我们</a>
                                      <div class="dropdown-menu dropdown-menu-right animate two-menu">
                                  
                                          <a href="https://mb.mituo.cn/mui618/about/show.php?id=22" target='_self' 0 title="公司简介" class='dropdown-item hassub '>公司简介</a>
                                                                
                                      </div>
                                  </li> -->
                              </ul>
                          </div>
                          <!-- 导航 -->
                      </div>
                  </div>
              </nav>
          </header>

   <div class="banner_met_16_3_71box">
        <div class="banner_met_16_3_71 page-bg" data-height='' style='' m-id='71' m-type='banner'>
          <div class="slick-slide">
            <img class="cover-image" src="<?php echo ($banner2["ad_code"]); ?>" srcset='<?php echo ($banner2["ad_code"]); ?>'
             sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0'>
          </div>
        </div>
        <div class="met-index-case">
          <div class="container">
            <div class="case" id="case">
              <ul class="sliderbox row">
                <?php if(is_array($news2)): foreach($news2 as $key=>$v): ?><li class="a-list">
                  <a href=""><?php echo ($v["title"]); ?>?</a>
                </li><?php endforeach; endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="subcolumn_nav_met_21_1_39" m-id='39' m-type='nocontent'>
        <div class="container">
          <div class="row">
            <div class="clearfix">
              <div class="subcolumn-nav text-xs-left">
                <ul class="subcolumn_nav_met_21_1_39-ul m-b-0 p-y-10 p-x-0 ulstyle">

                  <li>
                    <a href="<?php echo U('News/index',array("catid"=>"00"));?>" title="全部" class="active link">全部</a>
                  </li>
                  <?php if(is_array($location)): foreach($location as $key=>$v): ?><li>
                    <a href="<?php echo U('News/index',array("catid"=>$v['cat_id']));?>" title="<?php echo ($v["cat_name"]); ?>" class='link'><?php echo ($v["cat_name"]); ?></a>
                  </li><?php endforeach; endif; ?>
                </ul>
              </div>
              <div class="subcolumn-nav-location clearfix ulstyle">
                <li class="location">
                  您的位置： </li>
                <li>
                  <a href="/" title="网站首页">
                    网站首页 </a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>
                  <a href="" target='_self' title="新闻动态"><?php echo ($now["cat_name"]); ?></a>
                  <i class="fa fa-angle-right"></i>
                </li>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- 
      <div class="para_search_met_16_1_77" m-id='77'>
        <div class="    container">
          <div class="">
            <div class="clearfix p-y-10">
              <ul class="order inline-block p-0 m-y-10 m-r-10">
                <li class="order-list inline-block m-r-10"><a href="https://mb.mituo.cn/mui618/news/index.php?class1=3&page=&search=search&order=com"
                   class="p-x-10 p-y-5">推荐<i class="icon wb-triangle-up" aria-hidden="true"></i></a></li>
                <li class="order-list inline-block m-r-10"><a href="https://mb.mituo.cn/mui618/news/index.php?class1=3&page=&search=search&order=hit"
                   class="p-x-10 p-y-5">热门<i class="icon wb-triangle-up" aria-hidden="true"></i></a></li>
                <li class="order-list inline-block m-r-10"><a href="https://mb.mituo.cn/mui618/news/index.php?class1=3&page=&search=search&order=new"
                   class="p-x-10 p-y-5">最新<i class="icon wb-triangle-up" aria-hidden="true"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div> -->


      <main class="news_list_page_met_21_3_69 met-news" m-id='69'>
        <div class="container">
          <div class="row">
            <div class="news-title-bor">
              <div class="">
                <div class="news-title-con">
                  <span class="news-top">新闻动态</span>
                  <span class="news-hr"></span>
                  <p class="news-xs"></p>
                </div>
              </div>
            </div>

            <div class="met-news-list">
              <ul class="ulstyle met-pager-ajax imagesize invisible" data-scale='266x457' m-id='69' data-plugin="appear"
               data-animate="slide-bottom50" data-repeat="false">
               <?php if(is_array($list)): foreach($list as $key=>$v): ?><li class='border-bottom1'>
                  <h4>
                    <a href="<?php echo U('Home/News/page',array('id'=>$v['article_id']));?>" title="<?php echo ($v["title"]); ?>" target=_self><?php echo ($v["title"]); ?></a>
                  </h4>
                  <div class="time">
                    <span class="author"> </span>
                    <span class="times"><?php echo (date("y-m-d h:i:s",$v["publish_time"])); ?> 发表</span>
                  </div>
                  <p class="des font-weight-300"><?php echo (mb_substr($v["description"],0,100,'utf-8')); ?></p>
                  <p class="info font-weight-300">
                    <span><i class="icon wb-eye m-r-5 font-weight-300" aria-hidden="true"></i><?php echo ($v["click"]); ?>人看过</span>
                  </p>
                </li><?php endforeach; endif; ?>

              </ul>
              <div class='m-t-20 text-xs-center hidden-sm-down' m-type="nosysdata">
                <div class='met_pager'>
                  <?php echo ($page); ?>
           <!--        <span class='PreSpan'>上一页</span><a href='https://mb.mituo.cn/mui618/news/news.php?class1=3'
            class='Ahover'>1</a><a href='https://mb.mituo.cn/mui618/news/index.php?class1=3&page=2'>2</a><a href='https://mb.mituo.cn/mui618/news/index.php?class1=3&page=3'>3</a><a
            href='https://mb.mituo.cn/mui618/news/index.php?class1=3&page=4'>4</a><a href='https://mb.mituo.cn/mui618/news/index.php?class1=3&page=2'
            class='NextA'>下一页</a>
           <span class='PageText'>转至第</span>
           <input type='text' id='metPageT' data-pageurl='index.php?lang=cn&class1=3&page=||4' value='1' />
           <input type='button' id='metPageB' value='页' /> -->
                </div>


              </div>
              <div class="met_pager met-pager-ajax-link hidden-md-up" data-plugin="appear" data-animate="slide-bottom"
               data-repeat="false" m-type="nosysdata">
                <button type="button" class="btn btn-primary btn-block btn-squared ladda-button" id="met-pager-btn" data-plugin="ladda"
                 data-style="slide-left" data-url="" data-page="1">
                  <i class="icon wb-chevron-down m-r-5" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </main>



            <footer class='foot_info_met_21_2_27 met-foot  border-top1' m-id='27' m-type='foot'>
                <div class="foot">
                    <ul class="foot-nav">
                        <?php if(is_array($nav)): foreach($nav as $key=>$v): ?><li class="">
                            <a href="<?php echo ($v["url"]); ?>" target='_blank' title="<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="container">
                    <div class="col-md-12">
                        <div class="foot-logo-img">
                            <img src="/Public/Home/images/1560239129.png" alt="知识产权服务公司响应式网站模板" />
                        </div>
                        <div class="foot-con col-sm-5 col-lg-6">
                            <div class="foot-about">
                                <p style="text-align: left; margin-bottom: 5px;"><span style="color: rgb(255, 255, 255);"><strong><?php echo ($config2["company_name"]); ?></strong></span></p>
                                <p style="text-align: left; margin-bottom: 5px;"><span style="color: rgb(255, 255, 255);">电话：<?php echo ($config2["mobile"]); ?>
                                                   座机：<?php echo ($config2["phone"]); ?></span></p>
                                <p style="text-align: left; margin-bottom: 5px;"><span style="color: rgb(255, 255, 255);">邮箱：<?php echo ($config2["email"]); ?>   <br>  地址：<?php echo ($place[$config2['province']]); echo ($place[$config2['city']]); echo ($place[$config2['district']]); echo ($config2['address']); ?></span></p>
                                <div id="baidu_pastebin" style="position: absolute; width: 1px; height: 1px; overflow: hidden; left: -1000px; top: 30px;">email@email.m</div>
                            </div>
                            <div class="tex-link">
                                <ul class="breadcrumb p-0 link-img m-0">
                                </ul>
                            </div>
                            <div class="foot_box">
                               <!--  本站涵盖的内容、图片、视频等部分来源自网上，部分未能与原作者取得联系。若涉及版权问题，请及时通知我们并提供相关证明材料，我们将支付合理报酬或立即予以删除！ -->
                                <span style="margin-left: 5px;">
                                    <a href="https://mb.mituo.cn/mui618/about/show.php?id=21">联系我们</a>
                                </span>
                                <div>
                                </div>
                            </div>
                            <div class="powered_by_metinfo">
                                Powered by <b></b> &copy;<?php echo ($config2["copyright"]); ?>  <br><a href="http://www.beian.miit.gov.cn/"> 备案号<?php echo ($config2["record_no"]); ?></a>
                                &nbsp; </div>
                        </div>
                        <div class="foot-ewm-img">
                            <div>
                                <img src="<?php echo ($weixin[0]["ad_code"]); ?>" alt="关注我们">
                                <p>关注我们</p>
                            </div>
                 <!--   <div>
                    <img src="/Public/Home/images/1560232146.png" alt="微信二维码">
                    <p>微信二维码</p>
                                   </div> -->
                        </div>
                    </div>

                </div>
            </footer>

            <div class="foot_info_met_21_2_27_bottom text-xs-center     " m-id='27' data-bgs="|#007fd3|1" data-ifbotc="">
                <div class="main">
                    <div class="">
                        <a href="tel:0000000000" class="item" target="_blank">
                            <i class="fa fa-phone"></i>
                            <span>电话咨询</span>
                        </a>
                    </div>
                    <div class="">
                        <a href="https://mb.mituo.cn/mui618/img1/" class="item" target="_blank">
                            <i class="fa fa-user"></i>
                            <span>专业团队</span>
                        </a>
                    </div>
                    <div class="">
                        <a href="https://mb.mituo.cn/mui618/product/" class="item" target="_blank">
                            <i class="fa fa-paste"></i>
                            <span>业务领域</span>
                        </a>
                    </div>
                    <div class="">
                        <a href="http://wpa.qq.com/msgrd?v=3&uin=00000000&site=qq&menu=yes" class="item" target="_blank">
                            <i class="fa fa-qq"></i>
                            <span>QQ客服</span>
                        </a>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-icon btn-primary btn-squared back_top_met_16_1_70 met-scroll-top     " hidden
             m-id='70' m-type='nocontent'>
                <i class="icon wb-chevron-up" aria-hidden="true"></i>
            </button>

            <input type="hidden" name="met_lazyloadbg" value="">
            <script src="/Public/Home/js/basic.js"></script>
            <script>
                var metpagejs = "/Public/Home/js/index_cn.js";
                if (typeof jQuery != "undefined") {
                    metPageJs(metpagejs);
                } else {
                    var metPageInterval = setInterval(function() {
                        if (typeof jQuery != "undefined") {
                            metPageJs(metpagejs);
                            clearInterval(metPageInterval);
                        }
                    }, 50)
                }
            </script>
            <script src="/Public/Home/js/lang_json_cn.js"></script>
      <script>
        var metpagejs = "/Public/Home/js/product_cn.js";
        if (typeof jQuery != "undefined") {
          metPageJs(metpagejs);
        } else {
          var metPageInterval = setInterval(function() {
            if (typeof jQuery != "undefined") {
              metPageJs(metpagejs);
              clearInterval(metPageInterval);
            }
          }, 50)
        }
      </script>
    </body>

</html>