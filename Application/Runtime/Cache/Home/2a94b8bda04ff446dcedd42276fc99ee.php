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



        <!-- 轮播图333334开始 -->
        <div class="lunbowai">
            <div class="main_visual">
				<div class="flicking_con">
					<a href="javascript:"></a>
					<a href="javascript:"></a>
					<a href="javascript:"></a>
				</div>
                <div class="main_image">
                    <ul>
                        <?php if(is_array($banner)): foreach($banner as $key=>$v): ?><li>

                            <img class="img_1" src="<?php echo ($v["ad_code"]); ?>">
                            <!--  
                            <span  style="background:url("<?php echo ($v["ad_code"]); ?>") center top no-repeat"></span>-->

                        </li><?php endforeach; endif; ?>

                    </ul>

                    <a href="javascript:" id="btn_prev"></a>
                    <a href="javascript:" id="btn_next"></a>

                </div>
            </div>
            <!-- 轮播图结束 -->

            <div class="auto nei">

                <div class="nei_left nei_leftjiapd">
                    <img src="/Public/Home/images/a_20.png" class="ico ico1">
                    <p class="youxi" style="  width: 94%;">


                        <i class="more" style=" padding-top: 5px;">更多>></i>
                        <strong><span>麻将介绍</span></strong>

                    </p>
                    <div class="index-jieshao">
                      <p><?php echo (htmlspecialchars_decode($about2["description"])); ?></p>
                    </div>
                    
<div class="demo">  
    <div class="ico-img">
        <img src="/Public/Home/images/a_45.png" class="ico">
        <ul class="tabbtn" id="normaltab">
            <li class="current"><a href="">麻将规则</a></li>
            <li><a href="">麻将技巧</a></li>
            <li><a href="#">麻将文化</a></li>
        </ul>       
    </div>
    <div class="tabcon" id="normalcon">
        <div class="sublist">
            <div class="nes">
                <a href="#" style=" float: left;">
                    <img src="<?php echo ($newguize[0]["thumb"]); ?>" alt="newguize[0].title" style=" ">
                </a>
                <div class="nes_ri">
                    <a href="#">
                        <h3><?php echo ($newguize[0]["title"]); ?></h3>
                    </a>
                    <p> &nbsp; &nbsp; <?php echo ($newguize[0]["description"]); ?><a href="#">[详情]</a>
                    </p>        
                </div> 
                <br class="qc">
                <ul class="last">
                    <a href="#">
                        <li><span><?php echo (date("Y-m-d h:i:s",$newguize[1]["publish_time"])); ?></span><?php echo ($newguize[1]["title"]); ?></li>
                    </a>
                    <a href="#">
                        <li><span><?php echo (date("Y-m-d h:i:s",$newguize[2]["publish_time"])); ?></span><?php echo ($newguize[2]["title"]); ?></li>
                    </a>                                    
                </ul>
            </div>
        </div>



        <!--tabcon end-->

        <div class="sublist">
            <div class="nes">
                <a href="#" style=" float: left;">
                    <img src="<?php echo ($qwe[0]["thumb"]); ?>" alt="<?php echo ($qwe[0]["title"]); ?>" style=" ">
                </a>
                <div class="nes_ri">
                    <a href="#">
                        <h3><?php echo ($qwe[0]["title"]); ?></h3>
                    </a>
                    <p> &nbsp; &nbsp; <?php echo ($qwe[0]["description"]); ?><a href="#">[详情]</a>
                    </p>        
                </div> 
                <br class="qc">
                <ul class="last">
                    <a href="#">
                        <li><span><?php echo (date("Y-m-d h:i:s",$qwe[1]["publish_time"])); ?></span><?php echo ($qwe[1]["title"]); ?></li>
                    </a>
                    <a href="#">
                        <li><span><?php echo (date("Y-m-d h:i:s",$qwe[2]["publish_time"])); ?></span><?php echo ($qwe[2]["title"]); ?></li>
                    </a>                    
                </ul>
            </div>

        </div><!--tabcon end-->

        <div class="sublist">
            <div class="nes">
                <a href="#" style=" float: left;">
                    <img src="<?php echo ($newwenh[0]["thumb"]); ?>" alt="<?php echo ($newwenh[0]["title"]); ?>" style=" ">
                </a>
                <div class="nes_ri">
                    <a href="#">
                        <h3><?php echo ($newwenh[0]["title"]); ?></h3>
                    </a>
                    <p> &nbsp; &nbsp; <?php echo ($newwenh[0]["description"]); ?><a href="#">[详情]</a>
                    </p>        
                </div> 
                <br class="qc">
                <ul class="last">
                    <a href="#">
                        <li><span><?php echo (date("Y-m-d h:i:s",$newwenh[1]["publish_time"])); ?></span><?php echo ($newwenh[1]["title"]); ?></li>
                    </a>
                    <a href="#">
                        <li><span><?php echo (date("Y-m-d h:i:s",$newwenh[2]["publish_time"])); ?></span><?php echo ($newwenh[2]["title"]); ?></li>
                    </a>                    
                </ul>
            </div>

        </div><!--tabcon end-->


    </div><!--tabcon end-->

</div>

                    
    <!-- 广东麻将 -->
<div class="demo">  
    <div class="ico-img">
        <img src="/Public/Home/images/a_45.png" class="ico">
        <ul class="tabbtn" id="normaltab6">
              <?php if(is_array($newww)): foreach($newww as $key=>$v): ?><li class="current">
              
                <a href=""><?php echo ($v["title"]); ?></a></li><?php endforeach; endif; ?>
     <!--        <li><a href="">四川麻将</a></li>
            <li><a href="#">长沙麻将</a></li>
            <li><a href="#">贵阳麻将</a></li>
            <li><a href="#">广东麻将</a></li> -->
        </ul>       
    </div>

    <div class="tabcon" id="normalcon6">

        <?php if(is_array($newww)): foreach($newww as $key=>$v): ?><div class="sublist">
            <div class="nes">
                <div class="nes_ri index-nes_ri">
                    <a href="#">
                        <h3><?php echo ($v["title"]); ?></h3>
                    </a>
                    <p><?php echo ($v["description"]); ?><a href="#">[阅读全文]</a></p>
                </div>
            </div>
        </div><?php endforeach; endif; ?>

        <div class="sublist">
            <div class="nes">
                <div class="nes_ri index-nes_ri">
                    <a href="#">
                        <h3>麻将介绍222</h3>
                    </a>
                    <p> 麻将，起源于中国，粤港澳及闽南地区俗称麻雀，由中国古人发明的博弈游戏，娱乐用具，一般用竹子、骨头或塑料制成的小长方块，上面刻有花纹或字样，北方麻将每副136张，南方麻将多八个花牌，分别是春夏秋冬，梅竹兰菊，共计144张。四人骨牌博戏，流行于华人文化圈中。在明末清初马吊牌盛行的同时，由马吊牌又派生出一种叫“纸牌”的戏娱用具。纸牌开始共有60张。斗纸牌时，四人各先取十张，以后再依次取牌、打牌。一家打出牌，两家乃至三家同时告知，以得牌在先者为胜。这些牌目及玩法就很像今天的麻将牌了。这种牌戏在玩的过程中始终默不作声，所以又叫默和牌222。...<a href="#">[阅读全文]</a></p>
                </div>
            </div>

        </div>
        <div class="sublist">
            <div class="nes">
                <div class="nes_ri index-nes_ri">
                    <a href="#">
                        <h3>麻将介绍333</h3>
                    </a>
                    <p> 麻将，起源于中国，粤港澳及闽南地区俗称麻雀，由中国古人发明的博弈游戏，娱乐用具，一般用竹子、骨头或塑料制成的小长方块，上面刻有花纹或字样，北方麻将每副136张，南方麻将多八个花牌，分别是春夏秋冬，梅竹兰菊，共计144张。四人骨牌博戏，流行于华人文化圈中。在明末清初马吊牌盛行的同时，由马吊牌又派生出一种叫“纸牌”的戏娱用具。纸牌开始共有60张。斗纸牌时，四人各先取十张，以后再依次取牌、打牌。一家打出牌，两家乃至三家同时告知，以得牌在先者为胜。这些牌目及玩法就很像今天的麻将牌了。这种牌戏在玩的过程中始终默不作声，所以又叫默和牌333。...<a href="#">[阅读全文]</a></p>
                </div>
            </div>

        </div>
        <div class="sublist">
            <div class="nes">
                <div class="nes_ri index-nes_ri">
                    <a href="#">
                        <h3>麻将介绍444</h3>
                    </a>
                    <p> 麻将，起源于中国，粤港澳及闽南地区俗称麻雀，由中国古人发明的博弈游戏，娱乐用具，一般用竹子、骨头或塑料制成的小长方块，上面刻有花纹或字样，北方麻将每副136张，南方麻将多八个花牌，分别是春夏秋冬，梅竹兰菊，共计144张。四人骨牌博戏，流行于华人文化圈中。在明末清初马吊牌盛行的同时，由马吊牌又派生出一种叫“纸牌”的戏娱用具。纸牌开始共有60张。斗纸牌时，四人各先取十张，以后再依次取牌、打牌。一家打出牌，两家乃至三家同时告知，以得牌在先者为胜。这些牌目及玩法就很像今天的麻将牌了。这种牌戏在玩的过程中始终默不作声，所以又叫默和牌444。...<a href="#">[阅读全文]</a></p>
                </div>
            </div>
        </div>
        <div class="sublist">
            <div class="nes">
                <div class="nes_ri index-nes_ri">
                    <a href="#">
                        <h3>麻将介绍555</h3>
                    </a>
                    <p> 麻将，起源于中国，粤港澳及闽南地区俗称麻雀，由中国古人发明的博弈游戏，娱乐用具，一般用竹子、骨头或塑料制成的小长方块，上面刻有花纹或字样，北方麻将每副136张，南方麻将多八个花牌，分别是春夏秋冬，梅竹兰菊，共计144张。四人骨牌博戏，流行于华人文化圈中。在明末清初马吊牌盛行的同时，由马吊牌又派生出一种叫“纸牌”的戏娱用具。纸牌开始共有60张。斗纸牌时，四人各先取十张，以后再依次取牌、打牌。一家打出牌，两家乃至三家同时告知，以得牌在先者为胜。这些牌目及玩法就很像今天的麻将牌了。这种牌戏在玩的过程中始终默不作声，所以又叫默和牌555。...<a href="#">[阅读全文]</a></p>
                </div>
            </div>
        </div>
    </div>

</div>
                    
                </div>


                <div class="yxxz_right yxxz_right2" style=" position:relative">
                    <img src="/Public/Home/images/a_20.png" class="ico2">
                    <p class="youxi youxi3">
                        <span>游戏下载</span>
                        <br class="qc">
                    </p>

                    <ul class="left_yx">
                        <?php if(is_array($down)): foreach($down as $key=>$v): ?><li><img class="le_ft_iamg" rel="external nofollow" src="<?php echo ($v["original_img"]); ?>" alt="goods_nam">
                            <p><?php echo ($v["goods_name"]); ?><br/>
                                <span><?php echo ($v["consult"]); ?> <br/>大小：<?php echo ($v["store_count"]); ?>M</span></p>
                            <div class="oz">
                                <!-- href="<?php echo U('Base/download',array('fid'=>$v['fid']));?> onclick=disp_confirm()-->
                                <a  class="fl bgPng s_3 s_4 " style="cursor:pointer" rel="external nofollow"  href=<?php echo U('Goods-page',array('goodsid'=>$v['goods_id']));?> >游戏下载</a>
                       <!--      <script type="text/javascript">
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
                            </script> -->
                            </div>
                        </li><?php endforeach; endif; ?>
                 
                    </ul>
                </div>


            
                <div class="nei_left nei_right " style=" height: 313px;">
                    <img src="/Public/Home/images/a_23.png" class="ico">
                    <p class="youxi">
                        <a class="more" href="<?php echo U('News/index');?>" style=" padding-top: 5px;">更多>></a>
                        <span>最新资讯</span>
                    </p>
                    <br class="qc" />

                    <ul class="nws">
                        <?php if(is_array($newshot)): foreach($newshot as $key=>$v): ?><a href="<?php echo U('News/page',array('id'=>$v['article_id'],'cat_id'=>'31'));?>">
                            <li><span>
                             <?php echo ($v["cat_name"]); ?></span><?php echo ($v["title"]); ?></li>
                        </a><?php endforeach; endif; ?>
                    </ul>
                </div>

                <div class="nei_left nei_left3">
                    <img src="/Public/Home/images/a_55.png" class="ico ico1">
                    <p class="youxi" style="width: 93%;"><a class="more" href="/huodongzhongxin" style=" padding-top: 5px;">更多>></a>
                        <span>麻将视频</span>
                    </p>

                    <ul class="index-video">
                        <?php if(is_array($ship)): foreach($ship as $key=>$v): ?><li>
                        <video controls="" loop="" poster="/Public/Home/images/5ad961c494ac3.jpg" style=" height:277px;">
                            <source src="<?php echo ($v["link"]); ?>" type="video/mp4">
                        </video>
                        <a href="#"><h3><?php echo ($v["title"]); ?></h3></a>       
                        </li><?php endforeach; endif; ?>
                    </ul>

                </div>

                <div class="nei_left nei_left4">
                    <img src="/Public/Home/images/a_68.png" class="ico ico1">
                    <p class="youxi youxi2">
                        <!-- <a class="more" href="#">更多>></a> -->
                        <b class="tab tab2">
                            <!-- <a class="zhong" href="javascript:">合作商家</a> -->
                            <span>友情链接</span>
                        </b>
                    </p>
                    <br class="qc">

<!--                    <div class="hide show">
                        <ul class="hzpp">

                            <li><img src="/Public/Home/images/59c4872cae14b.jpg"></li></a>
                            <li><img src="/Public/Home/images/5a4451831aa11.jpg"></li></a>
                            <li><img src="/Public/Home/images/5a44518cbc292.jpg"></li></a>
                            <li><img src="/Public/Home/images/5a4451971767d.jpg"></li></a>
                            <li><img src="/Public/Home/images/5a4451a12c60b.jpg"></li></a> <br class="qc">
                        </ul>

                    </div> -->
                    <div class="hide show">
                        <ul class="hzpp lianjie">
                            <?php if(is_array($flink)): foreach($flink as $key=>$v): ?><li><a href="<?php echo ($v["link_url"]); ?>" target="_blank"><?php echo ($v["link_name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>


                </div>


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
<script type="text/javascript">
$(document).ready(function($){
    //默认选项卡切换
    $("#normaltab").tabso({
        cntSelect:"#normalcon",
        tabEvent:"mouseover",

        tabStyle:"normal"
    });
    //默认选项卡切换2
    $("#normaltab6").tabso({
        cntSelect:"#normalcon6",
        tabEvent:"mouseover",

        tabStyle:"normal"
    });
});

</script>   

</html>