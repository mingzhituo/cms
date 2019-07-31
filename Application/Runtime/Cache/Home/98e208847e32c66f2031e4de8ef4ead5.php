<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE HTML>
<html>
<head>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content=""  data-variable=""/>
<title><?php echo ($config2["store_title"]); ?></title>
<meta name="keywords" content="<?php echo ($config2["keyword"]); ?>">
<meta name="description" content="<?php echo ($config2["store_desc"]); ?>">
<link rel="stylesheet" href="/Public/Home/css/10ada1bfe8283ab1.css">
<link rel="stylesheet" href="/Public/Home/css/common.css">
<!--[if lt IE 10]>
<script src="static/js/media.match.min.js"></script>
<script src="static/js/respond.min.js"></script>
<script src="static/js/classlist.min.js"></script>
<![endif]-->

</head>
<body class="met-navfixed">
<!--[if lte IE 8]>
  <div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
  <p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
  </div>
<![endif]--> 
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="haokuaiji"  data-variable="" />

<link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="/Public/Home/css/e539b7d3e7ac4332.min.css">
<!--[if lt IE 10]>
<script src="https://www.szhaokuaiji.cn/app/system/include/static/vendor/media-match/media.match.min.js"></script>
<script src="https://www.szhaokuaiji.cn/app/system/include/static/vendor/respond/respond.min.js"></script>
<script src="https://www.szhaokuaiji.cn/app/system/include/static/js/classList.min.js"></script> 
<![endif]-->
<script src="/Public/Home/js/jQuery1.8.2.js" type="text/javascript"></script>

<!-- <script type="text/javascript" src="/Public/Home/js/jQuery.js"></script>
<script type="text/javascript" src="//cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script> -->
<script type="text/javascript" src="/Public/Home/js/pc.js"></script>

<script src="/Public/Home/js/c.js"></script>


</head>
<body class="padding-top-0">
<!--[if lte IE 8]>
    <div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
        <p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
    </div>
<![endif]-->
<div class="tophead">

  <!--   <div class="advertising alert hidden-xs" role="alert" style="background: url({}) center top no-repeat;">
        <a href="https://www.szhaokuaiji.cn/feedback/" target="_blank">
            <div class="container advertising-close-button">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="icon pe-close-circle" aria-hidden="true"></i>
                    </button>
            </div>
        </a>
    </div> -->

    <div class="top hidden-xs">
        <div class="container">

            <div class="pull-left tell">
                <h4 class="pull-left"><small><strong>客服热线：</strong></small></h4>
                <h4 class="pull-left font-ipt-color"><strong><?php echo ($config2["mobile"]); ?></strong></h4>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <h4 class="pull-right font-ipt-color"><strong><?php echo ($config2["store_url"]); ?></strong></h4>
            </div>

            <div class="pull-right imglogin hidden-xs">
                <!-- <i class="icon pe-phone pull-left" aria-hidden="true"></i> -->
                 <i class="fa fa-weixin" aria-hidden="true"></i>
                <div class="btn-group">
                    <div class="dropdown-toggle dropdownImg1" id="dropdownImg1" data-hover="dropdown" data-delay="1000" data-toggle="dropdown" aria-expanded="false">
                        客服微信
                        <span class="caret"></span>
                    </div>
                    <img class="dropdown-menu bullet dropdown-menu-right" aria-labelledby="dropdownImg1" role="menu" src="<?php echo ($weixin[0]["ad_code"]); ?>"/>
                </div>
            </div>

        </div>
    </div>
</div>

    <div class="topbar container hidden-xs">
        <div class="row">
            <h4 class="pull-left text-center col-md-3 col-sm-3 col-xs-6">
                <a href="/" class="navbar-logo" title="">
                    <img src="<?php echo ($config2["store_logo"]); ?>" class="lg-3" style="width:100%" alt="<?php echo ($config2["company_name"]); ?>" title="<?php echo ($config2["company_name"]); ?>" />
                </a>
            </h4>
            <div class="pull-left col-md-7 col-sm-7 hidden-xs">
                <div class="top-serch pull-right col-md-6 col-sm-12">

                        <form method='get' action="<?php echo U('Search/index');?>">
                           <!--  <input type='hidden' name='lang' value='cn' />
                            <input type='hidden' name='class1' value='10001' /> -->
                            <div class="form-group">
                                <div class="input-search">
                                    <button type="submit" class="input-search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    <input type="text" class="form-control" name="keyword" placeholder="Search">
                                </div>
                            </div>
                        </form>
                </div>


                <div class="top-serch-hot pull-right col-md-6 col-sm-0">
                    <ul class="list-inline pull-right">

                        <li class=""><a class="font-defult-color" href="<?php echo U('Search/index',array('keyword'=>'注册公司'));?>" target="_blank">注册公司</a></li>

                        <li class=""><a class="font-defult-color" href="<?php echo U('Search/index',array('keyword'=>'财务记账'));?>" target="_blank">财务记账</a></li>


                    </uls>
                </div>
            </div>


  <!--           <div class="col-md-2  col-sm-2 col-xs-6">
                <div class="pull-right member">
                    <a href="member/register_include.php?lang=cn" target="_blank">注册</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a class="font-ipt-color" href="member/" target="_blank">登陆</a>
                </div>
                <div class="pull-right member-icon">
                    <i class="icon pe-user" aria-hidden="true"></i>
                </div>
            </div> -->


        </div>
    </div>
    <nav class="navbar navbar-default navbar-mega margin-bottom-0 navTop" style="min-height: inherit;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle hamburger hamburger-close collapsed" data-toggle="collapse" data-target="#navbar-collapse-grid">
                <span class="sr-only">Toggle navigation</span>
                <span class="hamburger-bar"></span>
            </button>
            <a href="/" class="navbar-brand navbar-logo vertical-align  margin-0 padding-0 hidden-sm hidden-md hidden-lg" title="<?php echo ($config2["company_name"]); ?>">
                <div class="vertical-align-middle"><img src="<?php echo ($config2["store_logo"]); ?>" alt="<?php echo ($config2["company_name"]); ?>" title="<?php echo ($config2["company_name"]); ?>" style="width:80%;" /></div>
            </a>
        </div>
        <div class="container">
            <div class="navbar-collapse collapse" id="navbar-collapse-grid">

                <ul class="nav navbar-nav padding-right-3">

                    <li class="dropdown dropdown-fw dropdown-mega dropdown-fs-li">
                        <a aria-expanded="false" class="dropdown-toggle dropdown-fs-a" data-hover="dropdown" data-toggle="dropdown" href="#">
                            <b class="wb-align-justify"></b>
                            全部服务分类
                            <b class="caret"></b>
                        </a>
                        <div class="dropdown-menu examle-wrap margin-top-0 padding-vertical-0 dropdown-fs-menu" role="menu">
                            <div class="example margin-vertical-0">
                                <div class="panel-group panel-group-continuous margin-bottom-0" id="class-3" aria-multiselectable="true" role="tablist">

                                    <?php if(is_array($tree)): foreach($tree as $k=>$v): ?><div class="panel">
                                        <div class="panel-heading" id="class2-6" role="tab">
                                            <a class="panel-title font-size-18 font-weight-300 " data-parent="#class-3" data-toggle="collapse" href="#collapse-<?php echo ($k); ?>" aria-controls="collapse-2 " aria-expanded="ture">
                                                <span class="web-list pull-left padding-right-10" aria-hidden="true"></span>
                                                <?php echo ($v["name"]); ?>
                                            </a>
                                        </div>

                        <div class="panel-collapse collapse in" id="collapse-<?php echo ($k); ?>" aria-labelledby="class2-6" role="tabpanel">
                                            <div class="panel-body">

                                <ul class="list-inline">
                                    <?php if(is_array($v["son"])): foreach($v["son"] as $key=>$vo): ?><li><a href="<?php echo U('Goods/index',array('catid'=>$vo['id']));?>" title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                                                    </ul>

                                            </div>
                        </div>

                                    </div><?php endforeach; endif; ?>
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="nav navbar-nav navbar-left navlist">
                    </li>


                    <li><a href="/" title="网站首页" class="link active">网站首页</a></li>
<!-- 产品中心 -->
                    <li class="dropdown margin-left-0">
                        <a 
                            class="dropdown-toggle link " 
                            
                            data-hover="dropdown"
                            href="<?php echo U('Goods/index');?>" 
                            aria-expanded="false" 
                            role="button" 
                            0
                            title=""
                        >业务服务中心<span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right bullet animate" role="menu">
    
                            <?php if(is_array($tree)): foreach($tree as $key=>$v): ?><li><a href="<?php echo U('Goods/index',array('cat_id'=>$v['id']));?>" class=""  title="业务服务中心"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </li>
<!-- 导航 -->
<?php if(is_array($nav)): foreach($nav as $key=>$v): ?><li class="dropdown margin-left-0" <?php if($v["location"] == CONTROLLER_NAME): ?>style="background:#7bcaf7;"<?php endif; ?>>
                        <a 
                            class="dropdown-toggle link " 
                       
                            data-hover="dropdown"
                            href="<?php echo ($v["url"]); ?>" 
                            aria-expanded="false" 
                            role="button" 
                            0
                            title="<?php echo ($v["name"]); ?>"
                        ><?php echo ($v["name"]); ?></a>
                       
                       <!-- <span class="caret"></span> <ul class="dropdown-menu dropdown-menu-right bullet animate" role="menu">
    
                            <?php if(is_array($tree)): foreach($tree as $key=>$v): ?><li><a href="" class=""  title="<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul> 
                    -->
                    </li><?php endforeach; endif; ?>


        <!--             <li class="dropdown margin-left-0">
                        <a 
                            class="dropdown-toggle link " 
                            data-toggle="dropdown" 
                            data-hover="dropdown"
                            href="https://www.szhaokuaiji.cn/about/" 
                            aria-expanded="false" 
                            role="button" 
                            0
                            title="关于我们"
                        >关于我们 <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-menu-right bullet animate" role="menu">
    

                            <li><a href="https://www.szhaokuaiji.cn/about/19.html" class="" 0 title="公司简介">公司简介</a></li>    

                            <li><a href="https://www.szhaokuaiji.cn/about/98.html" class="" 0 title="联系我们">联系我们</a></li>    

                        </ul>
                    </li>
 -->



                </ul>   




            </div>
        </div>
    </nav>

<section class="met-shownews animsition">
  <div class="container">
    <div class="row">
      <div class="col-md-9 met-shownews-body">
        <div class="row">

          <div class="met-shownews-header">
          	<div >搜索<font style="color:red; margin:0 5px;"><?php echo ($keyword); ?></font>结果：</div>

          	   <?php if($keyword != ''): if(is_array($serRes)): foreach($serRes as $key=>$art): ?><h1 ><a href="<?php echo U('Home/News/page',array('id'=>$art['article_id'],'catid'=>$catid));?>"  ><?php echo ($art["title"]); ?></a></h1>
            <a href="<?php echo U('Home/News/page',array('id'=>$art['article_id'],'catid'=>$catid));?>"><img src="<?php echo ($art['thumb']); ?>" alt="<?php echo ($art["title"]); ?>" width="300"></a>
            <div class="info"> <span> <?php echo (date("Y-m-d",$art["time"])); ?> </span> <span> <?php echo ($config2["company_name"]); ?> </span> <span> <i class="icon wb-eye margin-right-5" aria-hidden="true"></i><script src="/Public/Home/js/count.js" type='text/javascript' language="javascript"></script> </span> </div>
            <p> <?php echo ($art["desc"]); ?></p><?php endforeach; endif; ?>  

             <else>
             没有更多结果<?php endif; ?>       
               
     

            <div class="center-block met_tools_code"></div>
          </div>
          <!-- <div class="met-shownews-footer">
            <ul class="pager pager-round">
            
                 <?php if($prev == null): ?><li class="previous"><a  href="javascript:void(0);" >上一篇：没有了</a></li>
                    <?php else: ?>
                        <li class="previous"><a  href="<?php echo U('Home/News/page','id='.$prev['article_id']);?>" >上一篇：<?php echo ($prev["title"]); ?></a></li><?php endif; ?>
                    <?php if($next == null): ?><li class="next"><a  href="javascript:void(0);" >下一篇：没有了</a> </li>
                    <?php else: ?>
                        <li class="next"><a class="previous " href="<?php echo U('Home/News/page','id='.$next['article_id']);?>" class="next">下一篇：<?php echo ($next["title"]); ?></a></li><?php endif; ?>
            </ul>
          </div> -->
        </div>
      </div>
      <div class="col-md-3">
        <div class="row">
          <div class="met-news-bar">
            <form  name="Search" action="<?php echo U('Search/index');?>">
              <input type="hidden" name="kwtype" value="0" />
              <div class="form-group">
                <div class="input-search">
                  <button type="submit" class="input-search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                  <input type="text" class="form-control" name="keyword" placeholder="Search">
                </div>
              </div>
            </form>
             <ul class="column">

              <?php if(is_array($location)): foreach($location as $key=>$vo): ?><li> <a href="<?php echo U('Home/News/column','catid='.$vo['cat_id']);?>" title="" class="link " <?php if(($vo['id'] == $catid) OR ($vo['id'] == $now['parent_id'])): ?>style = "color:#2699EB";<?php endif; ?>><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>
            
              
            </ul>
         
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="met-footnav text-center">
    <div class="container">
        <div class="row mob-masonry">

            <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
                <h4>全部服务分类</h4>
                <ul>

                    <?php if(is_array($tree)): foreach($tree as $key=>$v): ?><li><a href="<?php echo U('Goods/index');?>"  title=""><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                  

                </ul>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
                <h4>下载中心</h4>
                <ul>

                    <li><a href=""  title="税务文件">税务文件</a></li>

                    <li><a href=""  title="工商文件">工商文件</a></li>

                </ul>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
                <h4>新闻中心</h4>
                <ul>

                    <li><a href="<?php echo U('News/index');?>"  title="公司新闻">公司新闻</a></li>
                     <li><a href="<?php echo U('News/index');?>"  title="行业咨询">行业咨询</a></li>
                 

                </ul>
            </div>

            <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
                <h4>关于我们</h4>
                <ul>

                    <li><a href="<?php echo U(Brand/index);?>" 0 title="公司简介">公司简介</a></li>

                    <li><a href="<?php echo U(Contact/index);?>" 0 title="联系我们">联系我们</a></li>

                </ul>
            </div>

            <div class="col-md-3 col-ms-12 col-xs-12 info masonry-item">
                <em><a href="tel:<?php echo ($config2["mobile"]); ?>" title="<?php echo ($config2["mobile"]); ?>"><?php echo ($config2["mobile"]); ?></a></em>
                <p>广州注册公司咨询热线</p>


                <a id="met-weixin"><i class="fa fa-weixin light-green-700"></i></a>
                <div id="met-weixin-content" class="hide">
                    <div class="text-center met-weixin-img"><img src="<?php echo ($weixin[0]["ad_code"]); ?>" /></div>
                </div>

                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config2["qq"]); ?>&site=qq&menu=yes" rel="nofollow" target="_blank">
                    <i class="fa fa-qq"></i>
                </a>

            <!--     <a href="" rel="nofollow" target="_blank"><i class="fa fa-weibo red-600"></i></a> -->

                <a href="mailto:<?php echo ($config2["email"]); ?>" rel="nofollow"><i class="icon fa-envelope"></i></a>


            </div>
        </div>
    </div>
</div>

<div class="met-links text-center">
    <div class="container">
        <ol class="breadcrumb">
            <li>友情链接 :</li>
            <?php if(is_array($flink)): foreach($flink as $key=>$v): ?><li><a href="<?php echo ($v["url"]); ?>" title="<?php echo ($v["link_name"]); ?>" target="_blank"><?php echo ($v["link_name"]); ?></a></li><?php endforeach; endif; ?>
           

        </ol>
    </div>
</div>

<footer>
    <div class="container text-center">
        <p><?php echo ($config2["copyright"]); ?>  ICP备案号：<a href="http://www.miitbeian.gov.cn"  target="_blank"> <?php echo ($config2["record_no"]); ?></a> 
<!-- 
<script>cambrian.render('tail')</script>

<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<script>(function() {var _53code = document.createElement("script");_53code.src = "https://tb.53kf.com/code/code/10122957/2";var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(_53code, s);})();</script>
 -->
</p>
<p>地址：<?php echo ($place[$config2['province']]); echo ($place[$config2['city']]); echo ($place[$config2['district']]); echo ($config2['address']); ?> 手机：<?php echo ($config2["mobile"]); ?> <?php echo ($config2["phone"]); ?></p>

<!-- <script type="text/javascript" src="/Public/Home/js/service.js" id="qipn_side" data-siteurl="https://www.szhaokuaiji.cn/" data-lang="cn"></script> -->
    </div>
</footer>
<button type="button" class="btn btn-icon btn-primary btn-squared met-scroll-top hide"><i class="icon wb-chevron-up" aria-hidden="true"></i></button>


<script src="/Public/Home/js/443e213124b35508.min.js"></script>
<!-- 
<script src="/Public/Home/js/58aef1327c6bc52f.js"></script>
 -->
</body>
</html>