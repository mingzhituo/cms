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
                <a href="#">
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
				<img src="img/a_17.png">
				<a class="fua1" target="_blank" href="http://wpa.qq.com/msgrd?v=1&uin=3180235251&Site=http://www.ashangame.com/&Menu=yes"></a>
				<a class="fua2" href="javascript:"></a>
				<a class="fua3" href="javascript:"></a>


				<div class="pa border er_wei" style="text-align:center;color:black;">
					<b>阿闪游戏</b>
					<br>微信公众号



					<img style="width:99px;height:99px;" alt="" src="img/59b8deb699966.jpg">

					<i class="pa bgPng"></i>
				</div>

			</div>
			<div class="in_abut">

				<ul class="taba">
					<a href="#">
						<li>关于我们</li>
					</a>
					<a href="#">
						<li>联系我们</li>
					</a>
				</ul>


				<div class="at_right">

					<div class="in_right about1" style=" width: 1078px;">
						<h1 class="h1">关于我们</h1>
						<p>闪念科技，全名深圳闪念科技有限公司，成立于2017年，是国内手游行业迅速崛起的新锐发行平台，是一家集研发、发行于一体的网络游戏公司。</p>
						<p>闪念科技的目标是成为全国最专业的独立手机游戏运营平台，基于“深度运营”的平台理念， 对每一款游戏进行精细化运营，并致力于用最极致、最专业、最便捷的服务，让每一位玩家体验愉快、精彩的游戏过程，使之享受游戏带来的无尽快乐，最终成为国内顶尖的移动终端游戏平台。</p>
						<h4>深圳闪念科技有限公司营业执照：</h4>
						<img src="img/5a13897bcf623.jpg" alt="">
						<h4>网络文化经营许可证：</h4>
						<img src="img/5ad953cb30942.jpg" alt="">
					</div>


				</div>


				<br class="qc" />
			</div>

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

                        <a href="#" style="margin-left:0px">关于我们</a>
                        <?php if(is_array($aba)): foreach($aba as $key=>$v): ?><a href="<?php echo U('Brand/page',array('id'=>$v['article_id'],'catid'=>$v['cat_id']));?>"><?php echo ($v["title"]); ?></a><?php endforeach; endif; ?>

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


	</body>
	<script type="text/javascript" src="js/min.js"></script>
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

</html>
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

			location.href = 'm/guanyuwomen.html';

			break;
		}
	}
</script>