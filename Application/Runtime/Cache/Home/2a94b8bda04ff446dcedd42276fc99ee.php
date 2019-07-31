<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html class="">
	<head>
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

		
            <div class="banner_met_16_3_71box     ">
                <div class="banner_met_16_3_71 page-bg" data-height='' style='' m-id='71' m-type='banner'>
                    <?php if(is_array($banner)): foreach($banner as $key=>$v): ?><div class="slick-slide">
                        <img class="cover-image" src="<?php echo ($v["ad_code"]); ?>" srcset='<?php echo ($v["ad_code"]); ?>'
                         sizes="(max-width: 767px) 767px" alt="" data-height='0|0|0'>
                    </div><?php endforeach; endif; ?>
            
                </div>
                <div class="met-index-case">
                    <div class="container">
                        <div class="case" id="case">
                            <ul class="sliderbox row">

                                <?php if(is_array($newlist)): foreach($newlist as $key=>$v): ?><li class="a-list">
                                    <a href="<?php echo U('News/index',array("id"=>$v['article_id']));?>"><?php echo ($v["title"]); ?>?</a>
                                </li><?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

			<section class="service_list_met_11_1_8 text-xs-center" m-id="8">
				<div class="container">
					<div class="head">
						<h2 class="m-t-0 font-weight-300 title">业务服务</h2>
						<p class="subtitle m-b-10 ">Business Services</p>
						<p class="desc m-b-10 ">以客户需求为中心，提高用户满意体验</p>
					</div>
					<ul class="service-list m-t-30" data-resize="3|3|3|1">
						<li class="item">
							<a href="<?php echo U('Goods/index');?>" title="商标服务" target='_self'>
								<img src="/Public/Home/images/1560336350.png" alt="商标服务" />
								<h4>商标服务</h4>
							</a>
						</li>
						<li class="item">
							<a href="<?php echo U('Goods/index');?>" title="专利服务" target='_self'>
								<img src="/Public/Home/images/1560336122.png" alt="专利服务" />
								<h4>专利服务</h4>
							</a>
						</li>
						<li class="item">
							<a href="<?php echo U('Goods/index');?>" title="著作权服务" target='_self'>
								<img src="/Public/Home/images/1560335902.png" alt="著作权服务" />
								<h4>著作权服务</h4>
							</a>
						</li>
						<li class="item">
							<a href="<?php echo U('Goods/index');?>" title="体系产品认证" target='_self'>
								<img src="/Public/Home/images/1560335560.png" alt="体系产品认证" />
								<h4>体系产品认证</h4>
							</a>
						</li>
						<li class="item">
							<a href="<?php echo U('Goods/index');?>" title="项目申请服务" target='_self'>
								<img src="/Public/Home/images/1560336145.png" alt="项目申请服务" />
								<h4>项目申请服务</h4>
							</a>
						</li>
					</ul>
				</div>
			</section>

			<section class="product_list_met_11_1_11  text-xs-center" m-id="11">
				<div class="container">
					<div class="head">
						<h2 class="m-t-0 font-weight-300 title">业务领域</h2>
						<p class="subtitle m-b-10 ">Business area</p>
						<p class="desc m-b-10 ">提供业界领先技术</p>
					</div>
					<div class='nav-tabs-horizontal nav-tabs-inverse nav-tabs-animate'>
						<ul class="nav nav-tabs nav-tabs-solid flex flex-center">
							<li class='nav-item'>
								<a href="<?php echo U('Goods/index');?>" title="商标服务" class='nav-link radius0'>
									<h3 class='m-0 font-size-12'>商标服务</h3>
								</a>
							</li>
							<li class='nav-item'>
								<a href="<?php echo U('Goods/index');?>" title="专利服务" class='nav-link radius0'>
									<h3 class='m-0 font-size-12'>专利服务</h3>
								</a>
							</li>
							<li class='nav-item'>
								<a href="<?php echo U('Goods/index');?>" title="著作权服务" class='nav-link radius0'>
									<h3 class='m-0 font-size-12'>著作权服务</h3>
								</a>
							</li>
							<li class='nav-item'>
								<a href="<?php echo U('Goods/index');?>" title="体系产品认证" class='nav-link radius0'>
									<h3 class='m-0 font-size-12'>体系产品认证</h3>
								</a>
							</li>
							<li class='nav-item'>
								<a href="<?php echo U('Goods/index');?>" title="项目申请服务" class='nav-link radius0'>
									<h3 class='m-0 font-size-12'>项目申请服务</h3>
								</a>
							</li>
						</ul>
					</div>
					<ul class="product-list  m-b-0 m-t-30" data-resize="4|4|2|1">
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544355995.jpg" alt="专利代缴年费" />
									<a href="https://mb.mituo.cn/mui618/product/showproduct.php?id=17" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="专利代缴年费" class="block text-truncate"
									 target=_self>专利代缴年费</a>
								</h4>
							</div>
						</li>
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544356187.jpg" alt="专利交易" />
									<a href="<?php echo U('Goods/index');?>" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="专利交易" class="block text-truncate"
									 target=_self>专利交易</a>
								</h4>
							</div>
						</li>
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544355726.jpg" alt="商标交易" />
									<a href="<?php echo U('Goods/index');?>" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="商标交易" class="block text-truncate"
									 target=_self>商标交易</a>
								</h4>
							</div>
						</li>
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544355386.jpg" alt="ISO27001信息安全管理体系认证" />
									<a href="<?php echo U('Goods/index');?>" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="ISO27001信息安全管理体系认证" class="block text-truncate"
									 target=_self>ISO27001信息安全管理体系认证</a>
								</h4>
							</div>
						</li>
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544356116.jpg" alt="<?php echo U('Goods/index');?>" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="IATF16949汽车行业质量管理体系认证" class="block text-truncate"
									 target=_self>IATF16949汽车行业质量管理体系认证</a>
								</h4>
							</div>
						</li>
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544355780.jpg" alt="ISO18001职业健康安全管理体系认证" />
									<a href="<?php echo U('Goods/index');?>" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="ISO18001职业健康安全管理体系认证" class="block text-truncate"
									 target=_self>ISO18001职业健康安全管理体系认证</a>
								</h4>
							</div>
						</li>
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544355934.jpg" alt="ISO14001环境管理体系认证" />
									<a href="<?php echo U('Goods/index');?>" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="ISO14001环境管理体系认证" class="block text-truncate"
									 target=_self>ISO14001环境管理体系认证</a>
								</h4>
							</div>
						</li>
						<li class='m-b-30 item'>
							<div class="card ">
								<figure class="overlay overlay-hover">
									<img class="overlay-figure" src="/Public/Home/images/1544354617.jpg" alt="ISO9001质量管理体系认证" />
									<a href="<?php echo U('Goods/index');?>" target=_self class="overlay-panel overlay-background overlay-fade overlay-icon"
									 met-imgmask>
										<i class="fa fa-search"></i>
									</a>
								</figure>
								<h4 class="card-title p-y-20 p-l-5 font-szie-16 m-b-0">
									<a href="<?php echo U('Goods/index');?>" title="ISO9001质量管理体系认证" class="block text-truncate"
									 target=_self>ISO9001质量管理体系认证</a>
								</h4>
							</div>
						</li>
					</ul>
					<div class="control-label">
						<div class="control-prev">
							<i class="fa fa-angle-left"></i>
						</div>
						<a href="/" title="业务领域" class="more">MORE</a>
						<div class="control-next" ">
             <i class=" fa fa-angle-right"></i>
						</div>
					</div>
				</div>
			</section>

			<main class="about_list_met_28_8_13 page-content" m-id='13'>
				<div class="container">
					<div class="row">
						<div class="title">
							<h3 class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false">公司简介</h3>
							<p class="invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false">Company Profile</p>
						</div>
						<div class="show_item clearfix">
							<div class="show_item_left col-sm-5 invisible" data-plugin="appear" data-animate="slide-right50" data-repeat="false">
								<div class="row">
									<div class="show_item_left_bor">
										<!-- /Public/Home/images/1560390389.jpg -->
										<img src="<?php echo ($about_desc["thumb"]); ?>" style="width:129%;" class="invisible leftimg" alt="" data-plugin="appear" data-animate="slide-left50"
										 data-repeat="false">
									</div>
								</div>
							</div>
							<div class="show_item_right col-sm-7 invisible" data-plugin="appear" data-animate="slide-bottom50" data-repeat="false">
								<p>
									<p style=" font-weight: normal;"> <b><?php echo ($about_desc["description"]); ?><p></p>
									</p>
									<h3><a href="<?php echo U('Brand/index');?>" target="_blank">MORE >></a></h3>
							</div>
						</div>
					</div>
				</div>
			</main>

			<!-- <div class="img_list_met_35_2_150 met-index-img met-index-body" m-id="150">
				<div class="demo">
					<div class="container">
						<div class="row">
							<div class="title invisible" data-plugin="appear" data-animate="fade" data-repeat="false">
								<h2 class="mytitle">专业团队</h2>
								<p class="mydesc">professional team</p>
							</div>
							<ul class="slickul     						blocks-100
												blocks-md-2 blocks-lg-3 blocks-xxl-3					 	 no-space imagesize index-product-list tab-pane active animation-scale-up"
							 role="tabpanel" data-scale='355x500'>
								<li class="slideanim slick">
									<div class="box">
										<div class="box-img">
											<img src="/Public/Home/images/1544506038.jpg" alt="经顾问" />
										</div>
										<div class="box-content">
											<h4 class="title">经顾问</h4>
											<p class="description">专业经验具有二十多年代理机械、控制、机电一体化领域的专利申请和无效、侵权鉴定等的经验，以及企业知识产权战略咨询的经验，精通中日两国的知识产权制度。教育背景北京交通大学机械系学士
												经济学院研究生班毕业中</p>
			
										</div>
									</div>
			
								</li>
								<li class="slideanim slick">
									<div class="box">
										<div class="box-img">
											<img src="/Public/Home/images/1544506473.jpg" alt="刘顾问" />
										</div>
										<div class="box-content">
											<h4 class="title">刘顾问</h4>
											<p class="description">专业经验顾问1988年毕业于河北工业大学，获工学学士学位。1998年获得律师资格，加入某涉外知识产权公司从事知识产权业务。2003年2月加入集佳。从业以来处理了大量涉及商标、著作权、专利、不正当竞争等</p>
			
										</div>
									</div>
			
								</li>
								<li class="slideanim slick">
									<div class="box">
										<div class="box-img">
											<img src="/Public/Home/images/1544356669.jpg" alt="谭顾问" />
										</div>
										<div class="box-content">
											<h4 class="title">谭顾问</h4>
											<p class="description">专业经验谭先生有超过20年的专利法领域顾问经验，在专利申请、争议、许可转让、侵权调查、行政执法和诉讼领域为众多高科技公司提供服务。他的客户，无论是财富500强企业还是初创公司，都受益于他对知识产权风险</p>
			
										</div>
									</div>
			
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div> -->

			<section class="news_list_met_21_7_18  text-xs-left     bgcolor" m-id='18'>
				<div class="container">
					<div class="title-box clearfix">
						<h2 class="title" data-plugin="appear" data-animate="slide-top" data-repeat="false">新闻资讯</h2>
						<ul class="tabs clearfix">


						<!-- 	<li class="active">
							<a href="" title="新闻动态" target='_self'>
								<h3>全部</h3>
							</a>
						</li> -->
						
						
						</ul>
					</div>
					<div class="img-news clearfix">
						<ul class="imgnews-list">

							<li class="item-1">
								<a href="<?php echo U('News/index',array('id'=>$newsone['article_id']));?>" title="" target=_self>
									<div class="img">
									<!-- 	/Public/Home/images/1560232932.jpg -->
										<img data-original="<?php echo ($newsone["thumb"]); ?>" alt="<?php echo ($newsone["title"]); ?>?">
									</div>
									<div class="text clearfix">
										<div class="date">
											<span class="day">11</span>
											<span class="year">2018-12</span>
										</div>
										<div class="content">
											<h3><?php echo ($newsone["title"]); ?></h3>
											<p><?php echo (mb_substr($newsone["description"],0,50,"utf-8")); ?>
											</p>
										</div>
									</div>
								</a>
							</li>
							<?php if(is_array($newlist)): foreach($newlist as $key=>$v): ?><li class="item-other">
								<a href="<?php echo U('News/index',array('id'=>$v['article_id']));?>" title="<?php echo ($v["title"]); ?>" target=_self class="clearfix">
									<h3 class="title"><?php echo ($v["title"]); ?></h3>
									<i class="fa fa-angle-right"></i>
									<p><span class="item-other-desc"><?php echo (mb_substr($v["description"],0,50,"utf-8")); ?></span><span class="time"><?php echo (date("Y-m-d h:i:s",$v["publish_time"])); ?></span></p>

								</a>
							</li><?php endforeach; endif; ?>
							
						</ul>
					</div>
					<a href="<?php echo U('News/index');?>" title="新闻动态" target='_self' class="btn-more">
						MORE <i class="fa fa-angle-right"></i>
					</a>
				</div>
			</section>


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
		</body>
	<!-- 	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "https://hm.baidu.com/hm.js?0194d992571aff88fb86601b78023072";
			var s = document.getElementsByTagName("script")[0];
			s.parentNode.insertBefore(hm, s);
		})();
	</script> -->
</html>