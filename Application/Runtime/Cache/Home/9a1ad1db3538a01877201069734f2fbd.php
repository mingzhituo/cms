<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="renderer" content="webkit">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="generator" content="MetInfo 5.3.18"  data-variable=",cn,10001,,10001,M1032002" />

<title><?php echo ($now["cat_name"]); ?>-<?php echo ($config2["store_title"]); ?></title>
 <meta name="keywords" content="<?php echo ($config2["store_keyword"]); ?>">
 <meta name="description" content="<?php echo ($config2["store_desc"]); ?>">

<link rel="stylesheet" href="/Public/Home/css/3af1bf1fa0061831.css">
<link rel="stylesheet" href="/Public/Home/css/font-awesome.min.css">
<!--[if lt IE 10]>
<script src="http://www.acknetworks.com/app/system/include/static/vendor/media-match/media.match.min.js"></script>
<script src="http://www.acknetworks.com/app/system/include/static/vendor/respond/respond.min.js"></script>
<script src="http://www.acknetworks.com/app/system/include/static/js/classList.min.js"></script> 
<![endif]-->
<!-- 
<?php
echo '['.$_SERVER['REMOTE_ADDR'].']'; ?>
 -->
</head>
<body class="met-navfixed">
<!--[if lte IE 8]>
  <div class="text-center padding-top-50 padding-bottom-50 bg-blue-grey-100">
  <p class="browserupgrade font-size-18">你正在使用一个<strong>过时</strong>的浏览器。请<a href="http://browsehappy.com/" target="_blank">升级您的浏览器</a>，以提高您的体验。</p>
  </div>
<![endif]-->
  <nav class="navbar navbar-default met-nav navbar-fixed-top" role="navigation">
        <div class="container">
      <div class="row">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle hamburger collapsed"
          data-target="#example-navbar-default-collapse" data-toggle="collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
          </button>
          <a href="/" class="navbar-brand navbar-logo vertical-align" title="<?php echo ($config2["store_keyword"]); ?>">
            <div class="vertical-align-middle"><img src="<?php echo ($config2["store_logo"]); ?>" alt="<?php echo ($config2["store_keyword"]); ?>" title="<?php echo ($config2["store_keyword"]); ?>" /></div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="example-navbar-default-collapse">

        <ul class="nav navbar-nav navbar-right navlist">

          <li><a href="/" title="网站首页" <?php if(CONTROLLER_NAME == 'Index'): ?>style="background:#1e8bc3;color:#fff! important;"<?php endif; ?>>网站首页</a></li>




          <li class="dropdown margin-left-0">
            <a  
             class="dropdown-toggle link "  
              data-toggle="dropdown" 
              data-hover="dropdown"
              href="<?php echo U('Brand/index');?>" 
              aria-expanded="false" 
              role="button" 
              
              title="关于我们"
              <?php if(CONTROLLER_NAME == 'Brand' ): ?>style="background:#1e8bc3;color:#fff! important;"<?php endif; ?>>关于我们 <i class="fa fa-angle-down small"></i></a>
            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
              <?php if(is_array($about)): foreach($about as $key=>$vo): ?><li><a href="<?php echo U('Home/Brand/page','catid='.$vo['cat_id']);?>"  title="<?php echo ($vo["cat_name"]); ?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>

              <!-- <li class="dropdown-submenu">

                 <a href="" class=""  role="button" tabindex="-1">资质证书</a>


               <ul class="dropdown-menu animate" role="menu">

                  <li role="presentation"><a href="about/show.php?lang=cn&id=121" class="" role="menuitem" tabindex="-1">企业资质</a></li>

                  <li role="presentation"><a href="about/show.php?lang=cn&id=122" class="" role="menuitem" tabindex="-1">产品资质</a></li>

                  <li role="presentation"><a href="about/show.php?lang=cn&id=123" class="" role="menuitem" tabindex="-1">知识产权</a></li>

                </ul>
              </li> -->

            </ul>
          </li>


          <li class="dropdown margin-left-0">
            <a 
              class="dropdown-toggle link " 
              data-toggle="dropdown" 
              data-hover="dropdown"
              href="<?php echo U('Goods/index');?>" 
              aria-expanded="false" 
              role="button" 
              <?php if(CONTROLLER_NAME == 'Goods' ): ?>style="background:#1e8bc3;color:#fff! important;"<?php endif; ?>
              title="产品展示"
            >产品展示 <i class="fa fa-angle-down small"></i></a>
            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
  
              <li class="visible-xs-block"><a href="/"  title="全部">全部</a></li>
  
                <?php if(is_array($pro)): foreach($pro as $key=>$vo): ?><li><a href="<?php echo U('Home/Goods/column','catid='.$vo['id']);?>" class=""  title="<?php echo ($vo["name"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
          
            </ul>
          </li>




             <li class="dropdown margin-left-0">
            <a 
              class="dropdown-toggle link " 
              data-toggle="dropdown" 
              data-hover="dropdown"
              href="<?php echo U('News/index');?>" 
              aria-expanded="false" 
              role="button" 
              <?php if(CONTROLLER_NAME == 'News' ): ?>style="background:#1e8bc3;color:#fff! important;"<?php endif; ?>
              title="新闻资讯"
            >新闻资讯 <i class="fa fa-angle-down small"></i></a>
            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
  
              <li class="visible-xs-block"><a href="<?php echo U('News/index');?>"  title="全部">全部</a></li>
  
             <?php if(is_array($newcat)): foreach($newcat as $key=>$vo): ?><li><a href="<?php echo U('Home/News/index','catid='.$vo['cat_id']);?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
          </li>


   <li class="dropdown margin-left-0">
            <a 
              class="dropdown-toggle link " 
              data-toggle="dropdown" 
              data-hover="dropdown"
              href="<?php echo U('Case/index');?>" 
              aria-expanded="false" 
              role="button" 
              <?php if(CONTROLLER_NAME == 'Case' ): ?>style="background:#1e8bc3;color:#fff! important;"<?php endif; ?>
              title="案例中心"
            >案例中心 <i class="fa fa-angle-down small"></i></a>
            <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
  
              <li class="visible-xs-block"><a href="<?php echo U('Case/index');?>"  title="全部">全部</a></li>
  
            <?php if(is_array($casecat)): foreach($casecat as $key=>$vo): ?><li><a href="<?php echo U('Home/Case/index','catid='.$vo['cat_id']);?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>
            </ul>
          </li>


   <li class="dropdown margin-left-0">
            <a 
              class="dropdown-toggle link " 
              data-toggle="dropdown" 
              data-hover="dropdown"
              href="<?php echo U('Contact/index');?>" 
              aria-expanded="false" 
              role="button" 
              <?php if(CONTROLLER_NAME == 'Contact' ): ?>style="background:#1e8bc3;color:#fff! important;"<?php endif; ?>
              title="联系我们"
            >联系我们 <i class="fa fa-angle-down small"></i></a>

        <!--     <ul class="dropdown-menu dropdown-menu-right bullet" role="menu">
  
              <li class="visible-xs-block"><a href="<?php echo U('Case/index');?>"  title="全部">全部</a></li>
  
            <?php if(is_array($casecat)): foreach($casecat as $key=>$vo): ?><li><a href="<?php echo U('Home/Case/index','catid='.$vo['cat_id']);?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>
            </ul> -->
          </li>



        </ul>

        </div>
      </div>
    </div>
    </nav>




<div class="met-banner-ny vertical-align text-center" style="height:150px;background: url(<?php echo ($banner2["ad_code"]); ?>) center center no-repeat;background-color:#044a67;">
      <h1 class="vertical-align-middle"><?php echo ($nav_n["name"]); ?></h1>
    <!--   <span class="vertical-align-middle"><?php echo ($nav_n["en_name"]); ?></span> -->
    </div>




    <div class="met-position  ">
  <div class="container">
    <div class="row">
      <ol class="breadcrumb">
        <li>
          <a href="/" title="网站首页">
            <i class="icon wb-home" aria-hidden="true"></i>网站首页
          </a>
        </li>
        <li class="dropdown">

            <a href="../case/" 
              title="<?php echo ($nav_n["name"]); ?>" 
              class="dropdown-toggle" 
              data-toggle="dropdown" 
              aria-expanded="false"
            ><?php echo ($nav_n["name"]); ?> <i class="caret"></i></a>
            <ul class="dropdown-menu bullet">
  <!-- 
              <li><a href="../case/"  title="全部">全部</a></li>
   -->
         <?php if(is_array($location)): foreach($location as $key=>$vo): ?><li >
 <a href="<?php echo U(''.CONTROLLER_NAME.'/index',array('catid'=>$vo['cat_id']));?>"><?php echo ($vo["cat_name"]); ?></a>
</li><?php endforeach; endif; ?>

          
            </ul>

        </li>


      </ol>
    </div>
  </div>
</div>




    <div class="met-column-nav  ">
      <div class="container">
        <div class="row">

          <div class="col-md-12 sidebar_tile">
            <ul class="met-column-nav-ul">
  
        <!--       <li><a href="../case/" class="link"  title="全部">全部</a></li>
   -->
  <?php if(is_array($location)): foreach($location as $key=>$vo): ?><li  <?php if($catid == $vo['cat_id']): ?>style="background:#1e8bc3;"<?php endif; ?>>
  <a href="<?php echo U(''.CONTROLLER_NAME.'/index',array('catid'=>$vo['cat_id']));?>"  class="link" ><?php echo ($vo["cat_name"]); ?></a>
</li><?php endforeach; endif; ?>

           
            </ul>
          </div>

  
        </div>
      </div>
    </div>



<div class="met-img animsition">
    <div class="container">
        <div class="row">
            <ul class="blocks-100 blocks-sm-2 blocks-md-4 blocks-xlg-4  met-page-ajax" data-scale='0.76969696969697'>

<?php if(is_array($list)): foreach($list as $key=>$v): ?><li class="widget ">
  <div class="cover overlay overlay-hover">
    <img class="cover-image overlay-scale" data-original="<?php echo ($v["ad_code"]); ?>" alt="<?php echo ($v["ad_title"]); ?>" style='height:300px;'/>
    <div class="overlay-panel overlay-fade overlay-background overlay-background-fixed text-center vertical-align">
      <div class="vertical-align-middle">
        <div class="widget-time widget-divider">
          <span><?php echo (date("y-m-d",$v["publish_time"])); ?></span>
        </div>
        <h3 class="widget-title margin-bottom-20"><?php echo ($v["ad_name"]); ?></h3>

        <a href='#' title='<?php echo ($v["ad_title"]); ?>' class="btn btn-outline btn-inverse" target='_self'>详情</a>

      </div>
    </div>
  </div>
</li><?php endforeach; endif; ?>

            </ul>

<div >
        <div class='met_pager'>
          <?php echo ($page); ?>
    <!--   <span class='PreSpan'>上一页</span><a href=../case/ class='Ahover'>1</a><a href=img.php?lang=cn&class1=33&page=2 >2</a><a href=img.php?lang=cn&class1=33&page=3 >3</a><a href=img.php?lang=cn&class1=33&page=4 >4</a><a href=img.php?lang=cn&class1=33&page=5 >5</a><a href=img.php?lang=cn&class1=33&page=2 class='NextA'>下一页</a>
          <span class='PageText'>转至第</span>
          <input type='text' id='metPageT' data-pageurl='img.php?lang=cn&class1=33&page=||5' value='1' />
          <input type='button' id='metPageB' value='页' /> -->
        </div>
    </div>


<!-- <div class="met-page-ajax-body ">
  <button type="button" class="btn btn-default btn-block btn-squared ladda-button" id="met-page-btn" data-style="slide-left" data-url="http://www.acknetworks.com/case/?lang=cn&class1=33&class2=0&class3=0&mbpagelist=1" data-page="1"><i class="icon wb-chevron-down margin-right-5" aria-hidden="true"></i>加载更多</button>
</div> -->

    </div>
  </div>
</div>




<div class="met-footnav text-center">
    <div class="container">
    <div class="row mob-masonry">

      <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
        <h4>产品展示</h4>
        <ul>
          <?php if(is_array($pro)): foreach($pro as $key=>$vo): ?><li><a href="<?php echo U('Home/Goods/column','catid='.$vo['cat_id']);?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
        
        </ul>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
        <h4>新闻及案例</h4>
        <ul>

          <?php if(is_array($casecat)): foreach($casecat as $key=>$vo): ?><li><a href="<?php echo U('Home/Case/index','catid='.$vo['cat_id']);?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>
                 <?php if(is_array($newcat)): foreach($newcat as $key=>$vo): ?><li><a href="<?php echo U('Home/News/index','catid='.$vo['cat_id']);?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>

        </ul>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-6 list masonry-item">
        <h4>服务支持</h4>
        <ul>
 <?php if(is_array($about)): foreach($about as $key=>$vo): ?><li><a href="<?php echo U('Home/Brand/page','catid='.$vo['cat_id']);?>"><?php echo ($vo["cat_name"]); ?></a></li><?php endforeach; endif; ?>
        <li><a href="<?php echo U('Home/Case/index');?>">联系我们</a></li>
        

        </ul>
      </div>

      <div class="col-md-3 col-ms-12 col-xs-12 info masonry-item">
        <em><a href="tel:400-650-8335" title="<?php echo ($config2["mobile"]); ?>"><?php echo ($config2["mobile"]); ?></a></em>
        <p></p>


        <a id="met-weixin"><i class="fa fa-weixin light-green-700"></i></a>
        <div id="met-weixin-content" class="hide">
          <div class="text-center met-weixin-img"><img src="<?php echo ($weixin[0]["ad_code"]); ?>" /></div>
        </div>

        <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($config2["qq"]); ?>&site=qq&menu=yes" rel="nofollow" target="_blank">
          <i class="fa fa-qq"></i>
        </a>


      </div>
    </div>
  </div>
</div>

<footer>

    <div class="container text-center">
    <p><?php echo ($config2["copyright"]); ?>     <a href="http://www.miibeian.gov.cn" target="_blank" title="备案号"><?php echo ($config2["record_no"]); ?></a> <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?441f5bfde85112142afb397fc8aabd5a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?30f04034b131285d87a926857ee37699";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?aaf028ab509e87a653c0df66797f04ff";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?8b41be63182015583c16c63f69e41fc3";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?97e8d7355f3123dd155baa83183ef908";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?9bce5265f6b11b7b0782c75be5ce7088";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script></p>
<p>地址：<?php echo ($place[$config2['province']]); echo ($place[$config2['city']]); echo ($place[$config2['district']]); echo ($config2['address']); ?></p>
<p>服务热线：<?php echo ($config2["mobile"]); ?></p>

   <!--  <div class="powered_by_metinfo">Powered&nbsp;by&nbsp;<a href="http://www.MetInfo.cn/#copyright" target="_blank" title="企业网站管理系统">MetInfo</a>&nbsp;5.3.18</div> -->

    </div>
</footer>
<button type="button" class="btn btn-icon btn-ftop btn-squared met-scroll-top hide"><i class="icon wb-chevron-up" aria-hidden="true"></i></button>


<script src="/Public/Home/js/d4cff3922527a903.js"></script>
</body>
</html>