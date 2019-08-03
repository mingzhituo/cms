<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
   
        <meta charset="utf-8" />
        <title><?php echo ($config2["store_title"]); ?></title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link rel="stylesheet" href="/Public/Home/css/init.css" />
        <link rel="stylesheet" href="/Public/Home/css/main.css" />
        
        <link rel="stylesheet" href="/Public/Home/css/jsmodern.min.css">
        <link rel="stylesheet" href="/Public/Home/css/comment.css">
        <link rel="stylesheet" type="text/css" href="/Public/Home/css/tab.css"/>
        <script type="text/javascript" src="/Public/Home/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="/Public/Home/js/jquery.jslides.js"></script>
        <script type="text/javascript" src="/Public/Home/js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="/Public/Home/js/jquery.touchslider.js"></script>
				<script type="text/javascript" src="/Public/Home/js/superslide.js"></script>
      
    <!--移动代码适配开始-->
        <script type="text/javascript">
            var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito",
                "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");

            var browser = navigator.userAgent.toLowerCase();

            var isMobile = false;

            for (var i = 0; i < mobileAgent.length; i++) {
                if (browser.indexOf(mobileAgent[i]) != -1) {
                    isMobile = true;

                    //alert(mobileAgent[i]); 

                    location.href = '/';

                    break;
                }
            }
        </script>
        <!--移动代码适配结束-->
         
        
     <!--    <script type="text/javascript">
            var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos","incognito",
                "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");

            var browser = navigator.userAgent.toLowerCase();

            var isMobile = false;

            for (var i = 0; i < mobileAgent.length; i++) {
                if (browser.indexOf(mobileAgent[i]) != -1) {
                    isMobile = true;

                    //alert(mobileAgent[i]); 

                    location.href = './m/index.html';

                    break;
                }
            }
        </script> -->
    </head>
    <body>
		<!-- 侧边栏 -->
		<!-- <div class="fu">
			<img src="/Public/Home/images/a_17.png">
			<a class="fua1" target="_blank" href="http://wpa.qq.com/msgrd?v=1&uin=3180235251&Site=http://www.ashangame.com/&Menu=yes"></a>
			<a class="fua2" href="javascript:"></a>
			<a class="fua3" href="javascript:"></a>
			<div class="pa border er_wei" style="text-align:center;color:black;">
				<b>阿闪游戏</b>
				<br>微信公众号
				<img style="width:99px;height:99px;" alt="" src="/Public/Home/images/59b8deb699966.jpg">
				<i class="pa bgPng"></i>
			</div>
		</div>		
		 -->
        <div class="head">
             <div class="auto headtop">
                <p>咨询电话:<?php echo ($config2["phone"]); ?>
                <!--     <?php echo LOG_PATH; ?> -->
                </p>
                <div class="kefu">
                    <a href="javascript:void(0)" class="gzhao"><img src="/Public/Home/images/a_06.png"></a>
                    <a rel="nofollow" href="tencent://message/?uin=<?php echo ($config2["qq"]); ?>&Site=QQ交谈&Menu=yes"> <img src="/Public/Home/images/a_03.png"></a>
                    <div class="gzh">
                        <span>扫码关注微信公众号</span>
                        <img src="<?php echo ($weixin[0]["ad_code"]); ?>" class="toperwei" style="width: 190px;"> </div>
                </div>
            </div>
            <div class="xian"></div>
            <div class="auto headlogo">
                <a href="/">
            <img src="<?php echo ($config2["store_logo"]); ?>" alt="<?php echo ($config2["compay_name"]); ?>" style="widt:15%">

                </a>
                <ul class="dh">
                    <a href="/">
                        <li <?php if(CONTROLLER_NAME == Index ): ?>class="xz"<?php endif; ?>>网站首页</li>
                    </a>

                    <?php if(is_array($nav)): foreach($nav as $key=>$v): ?><a href="<?php echo ($v["url"]); ?>">
                        <li <?php if(__INFO__ == $v["location"] ): ?>class="xz"<?php endif; ?>><?php echo ($v["name"]); ?></li>
                    </a><?php endforeach; endif; ?>
               
                </ul>
            </div>
        </div>

 
    

        <div class="auto nei">
            <div class="fu">
                <img src="/Public/Home/images/a_17.png">
                <a class="fua1" target="_blank" href="tencent://message/?uin=<?php echo ($config2["qq"]); ?>&Site=uemo&Menu=yes"></a>
                <a class="fua2" href="javascript:"></a>
                <a class="fua3" href="javascript:"></a>


                <div class="pa border er_wei" style="text-align:center;color:black;">
                    <b><?php echo ($config2["company_name"]); ?></b>
                    <br>微信公众号



                    <img style="width:99px;height:99px;" alt="" src="<?php echo ($weixin[0]["ad_code"]); ?>">

                    <i class="pa bgPng"></i>
                </div>

            </div>

            <p class="weizhi"> 当前位置：
                <a href="/">首页</a>&gt;&gt;<a href=""><?php echo ($now["cat_name"]); ?></a>
            </p>



                <div class="nei_left table1 table2">
                    <img src="/Public/Home/images/a_45.png" class="ico">
                    <p class="youxi youxi2" style="margin-top: -10px; width: 931px; font-size: 16px;padding-top: 0px; margin-left: 10px;">
                        <b class="tab tab3">
                            <span class="zhong"><?php echo ($now["cat_name"]); ?> </span>

                        </b>
                    </p>
                    <br class="qc" />
                    <div class="hide show d1">
                        <ul class="new_lst hidden">
                            <?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
                                <div class="lst_left">
                                    <a href="<?php echo U('News/page',array('id'=>$v['article_id'],'catid'=>$v['cat_id']));?>"><img src="<?php echo ($v["thumb"]); ?>" alt="<?php echo ($v["title"]); ?>"></a>
                                </div>
                                <div class="lst_right">
                                    <a href="<?php echo U('News/page',array('id'=>$v['article_id'],'catid'=>$v['cat_id']));?>">
                                        <div class="hhh1"><?php echo ($v["title"]); ?></div>
                                        <div class="hhh2">
                                           <?php echo ($v["description"]); ?></div>
                                    </a>
                                    <div class="hhh3"><a href="<?php echo U('News/page',array('id'=>$v['article_id'],'catid'=>$v['cat_id']));?>">查看详情>></a> 发布时间：<?php echo (date("Y-m-d h:i:s",$v["publish_time"])); ?></div>
                                </div>
                            </li><?php endforeach; endif; ?>


                            <br class="qc" />
                        </ul>

                        <ul class="page-ul">
                            <?php echo ($page); ?>
                 
                        </ul>

                    </div>
               
                </div>
				
				
            <div class="fu_left">
                <div class="yxxz_right yxxz_right2" style="position:relative">
                    <img src="/Public/Home/images/a_20.png" class="ico2">
                    <p class="youxi youxi3">
                        <span>热门文章</span>
                    </p>
                    <br class="qc">

                    <ul class="index-news majiang-right">
                        <?php if(is_array($list)): foreach($list as $key=>$v): ?><li>
                            <a href="">
                                <img class="" src="<?php echo ($v["thumb"]); ?>" alt="">
                                <h4><?php echo ($v["title"]); ?></h4>
                                <time>06/27</time>
                            </a>
                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <div class="yxxz_right yxxz_right2" style="position:relative">
                    <img src="/Public/Home/images/a_20.png" class="ico2">
                    <p class="youxi youxi3">
                        <span>游戏下载</span>
                        <br class="qc">
                    </p>

                    <ul class="left_yx">
                        <?php if(is_array($down)): foreach($down as $key=>$v): ?><li><img class="le_ft_iamg" src="/Public/Home/images/5ad1a8e5ab439.png" alt="阿闪打拱">
                            <p><?php echo ($v["file_name"]); ?><br />
                                <span><?php echo ($v["cat_name"]); ?></span></p>
                            <div class="oz">
                                <a class="fl bgPng s_3 s_4" onclick=disp_confirm()>游戏下载</a>
                            </div>

                        </li><?php endforeach; endif; ?>
                    </ul>
                </div>

            </div>				
            </div>  
            
    
       <!--         <br class="qc"> </div>
        </div>
 -->

     
            </div>
            <br class="qc" />

        </div>


        <div class="dibu">
            <div class="auto">
                <img class="dilogo" src="<?php echo ($config2["store_logo"]); ?>">
                <div class="abo">
                    <p>

                        <a href="/sitemap.xml" style="margin-left:0px">网站地图</a>
                        <?php if(is_array($aba)): foreach($aba as $key=>$v): ?><a href="<?php echo U('Brand/page_q',array('id'=>$v['article_id'],'catid'=>$v['cat_id']));?>"><?php echo ($v["title"]); ?></a><?php endforeach; endif; ?>

                    </p>
                    <p class="mc"><?php echo ($config2["company_name"]); ?><br/></p> 
                    
                </div>

                <div class="erwei">


<!-- /Public/Home/images/59c47ee41d6b0.png -->
                    <img alt="" src="<?php echo ($weixin[0]["ad_code"]); ?>" style="width: 190px;"> </div>

            </div>
        </div>

        <div class="zuidi">
            <div class="auto auto3">
                <a class="jubao jubao1" href="javascript:void(0)" style="margin-left:125px;"><img src="/Public/Home/images/ico_03.png">不良信息举报</a>
                <a class="jubao" href="javascript:void(0)"><img src="/Public/Home/images/ico_07.png">粤网文[2017]9258-2347号</a><!-- -->
                <a class="jubao" <a rel="nofollow" href="http://www.beian.miit.gov.cn" target="_blank"><img src="/Public/Home/images/ico_07.png"><?php echo ($config2["record_no"]); ?></a>
                <a class="jubao" <a rel="nofollow" href="http://gsxt.gdgs.gov.cn/" target="_blank"><img src="/Public/Home/images/ico_09.png">广东省工商行政管理局</a>
            </div>


        </div>
    





    </body>
    
    <script type="text/javascript" src="/Public/Home/js/min.js"></script>
    <!-- 选项卡 -->
<script type="text/javascript" src="/Public/Home/js/jquery.tabso_yeso.js"></script>
<!-- 下载js -->
   <script type="text/javascript">
                            function disp_confirm()
                              {
                              var r=confirm("确认下载？")
                              if (r==true)
                                {
                                window.location.assign('<?php echo U('Base/download',array('fid'=>$v['fid']));?>')
                                }
                              else
                                {
                                return false;
                                }
                              }
    </script>
    <!-- 滑动js -->
        <script type="text/javascript">
        $(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() >= 46) { //向下滚动像素大于这个值时，即出现小火箭~
                    $('.fu').addClass('fu1'); //火箭淡入的时间，越小出现的越快~
                } else {
                    $('.fu').removeClass('fu1'); //火箭淡出的时间，越小消失的越快~
                }
            });
            $('.fua3').click(function() {
                $('html,body').animate({
                    scrollTop: '0px'
                }, 800);
            }); //火箭动画停留时间，越小消失的越快~
        });


        $('.xzph li').hover(function() {
            $(this).removeClass('m_ei').siblings().addClass('m_ei')
        })
    </script>

    <!--移动代码适配开始-->
    <script type="text/javascript">
        var mobileAgent = new Array("iphone", "ipod", "ipad", "android", "mobile", "blackberry", "webos", "incognito",
            "webmate", "bada", "nokia", "lg", "ucweb", "skyfire");

        var browser = navigator.userAgent.toLowerCase();

        var isMobile = false;

        for (var i = 0; i < mobileAgent.length; i++) {
            if (browser.indexOf(mobileAgent[i]) != -1) {
                isMobile = true;

                //alert(mobileAgent[i]); 

                location.href = 'm/xiazaizhongxin-01.html';

                break;
            }
        }
    </script>
    <!--移动代码适配结束-->



</html>