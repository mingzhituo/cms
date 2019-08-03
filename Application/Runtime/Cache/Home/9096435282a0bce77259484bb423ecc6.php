<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		 <link rel="stylesheet" href="/Public/Home/css/style8.css">
		<script type="text/javascript" src="/Public/Home/js/superslide.js"></script>
		
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

		<style type="text/css">
			.table2 {
				width: 100%;
			}
			.fu_right {width: 926px;}
			.yxxz_left2 {width: 886px;}
		</style>
		<div class="auto nei">
			<div class="fu">
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

			<p class="weizhi"> 当前位置：
				<a href="#">首页</a>&gt;&gt;<a href="#">下载中心</a> </p>

			<div class="fu_right">
				<div class="yxxz_left">
					<img class="last_iamg" src="/Public/Home/images/5a950050a2655.png" alt="闪心牌圈">
					<div class="last_ou last_ou2">
						<p class="p1">
							<h1><?php echo ($goods["goods_name"]); ?></h1>
						</p>
						<p class="xin_xi">大小：<span><?php echo ($goods["store_count"]); ?>M</span></p>
						<p class="xin_xi">版本：<span><?php echo ($goods["sales_sum"]); ?></span></p>
						<p class="xin_xi">系统：<span><?php echo ($goods["consult"]); ?></span></p>
						<!-- <p class="xin_xi">类型：<span><?php echo ($goods["goods_name"]); ?></span></p> 
						<p class="xin_xi">语言：<span><?php echo ($goods["goods_name"]); ?></span></p>-->
						<p class="xin_xi">时间：<span><?php echo (date("Y-m-s h:i",$goods["on_time"])); ?></span></p>
						<br class="qc" />
						<div class="yxxian"></div>
					</div>
					<br class="qc">

					<p class="pf">评分：<?php echo ($goods["click_count"]); ?></p>
				
					<div class="xz_p xz_p2">
						<a href="<?php echo ($goods["send_time"]); ?>" class="xiazai-a">安卓下载</a>
						<a href="<?php echo ($goods["goods_name"]); ?>" class="d_k"><img src="/Public/Home/images/yx_04.png"></a>
						<div class="er_xia"><img src="<?php echo ($url1); ?>">
							<p>亲，微信扫码后，请务必在浏览器打开下载！</p>
						</div>
					</div>
			
					<div class="xz_p"> 
							<a href="<?php echo ($goods["sale_address"]); ?>" class="xiazai-a ys">苹果下载</a>
						<a href="<?php echo ($goods["sale_address"]); ?>" class="d_k">
							<img src="/Public/Home/images/yx_07.png">
						</a>
						<div class="er_xia"><img src="<?php echo ($url2); ?>">
							<p>亲，微信扫码后，请务必在浏览器打开下载！</p>
						</div>
					</div>

				</div>



				<br class="qc">



				<div class="yxxz_left yxxz_left2">
					<p class="youxi">
						<span>游戏截图</span>
						<br class="qc">
					</p>

					<div class="gun_dong">
						<div class="zou">
							<ul class="waiul">
							<?php if(is_array($goods['images'])): foreach($goods['images'] as $key=>$v): ?><li> <img src="<?php echo ($v["image_url"]); ?>" ></li><?php endforeach; endif; ?>

								<br class="qc">
							</ul>
							<a href="javascript:" class="prev"></a>
							<a href="javascript:" class="next"></a>
						</div>



						<script type="text/javascript">
							jQuery(".gun_dong").slide({
								titCell: ".hd ul",
								mainCell: ".zou ul",
								autoPage: true,
								effect: "left",
								autoPlay: false,
								vis: 4,
								delayTime: 1000
							});
						</script>
					</div>
				</div>

				<div class="yxxz_left yxxz_left2">
					<p class="youxi">
						<span>游戏简介</span>
						<br class="qc">
					</p>
					<div class="download-index">
						<?php echo (htmlspecialchars_decode($goods["goods_content"])); ?>
					</div>


				</div>

				<div class="yxxz_left yxxz_left2">
					<p class="youxi">
						<span>欢迎你评论</span>
						<br class="qc">
					</p>
					<!-- 评论表单 -->
				  <!-- 评论  -->
        <div class="nei_left table2" style="margin-top: 8px;">

          <div class="commentAll">
            <!--评论区域 begin-->
            <!-- <div class="reviewArea clearfix">
              <textarea class="content comment-input" placeholder="请输入你想要评论的内容" onkeyup="keyUP(this)"></textarea> 
              <a href="javascript:;" class="plBtn">欢迎在底部评论区发表高见 ！</a>
            </div>-->
            <!--评论区域 end-->
            <!--回复区域 begin
<div class="comment-show-con-img pull-left"><img src="images/header-img-comment_03.png" alt=""></div>   <!--  <a href="javascript:;" class="removeBlock">删除</a> -->
                     <!--  <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> -->
                      
  <?php if(is_array($liuyan)): foreach($liuyan as $key=>$v): ?><div class="comment-show">

              <div class="comment-show-con clearfix">

          
                <div class="comment-show-con-list pull-left clearfix">

                  <div class="pl-text clearfix">
                    <a href="#" class="comment-size-name"><?php echo ($v["name"]); ?> : </a>
                    <span class="my-pl-con">&nbsp;<?php echo ($v["message"]); ?></span>
                  </div>

                  <div class="date-dz">发表于<?php echo (date("Y年-m月-d日 h:i:s",$v["time"])); ?></span>
                    <div class="date-dz-right pull-right comment-pl-block">
                   
                      <span class="pull-left date-dz-line">|</span>
                      <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a>
                    </div>
                  </div>
                  <div class="hf-list-con"></div>
                </div> 
              



              </div>
            </div><?php endforeach; endif; ?>
            <!--回复区域 end-->
          </div>



        </div>
				  </block>	


				</div>



		   <!-- 相关推荐 -->
        <div class="nei_left tuijian">
          <p class="youxi youxi3">
            <span>相关推荐</span>
            <br class="qc">
            <ul class="nws nws2">
                <?php if(is_array($news2)): foreach($news2 as $key=>$v): ?><a href="<?php echo U('News/page',array('id'=>$v['article_id'],'catid'=>$v['cat_id']));?>">
                <li><span>热点推荐</span><?php echo ($v["title"]); ?></li>
              </a><?php endforeach; endif; ?>
            </ul>
          </p>
        </div>
        <!-- 评论表单 -->
        <div class="nei_left tuijian">
          <p class="youxi" style=" margin-left: 3.2%;">
            <span>欢迎你评论</span>
            <br class="qc">
          </p>
          <script src="https://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
          <script src="https://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>
          <script>

             function refresh () {
      var src = '<?php echo U('Home/Base/verify');?>'+'?'+Math.random()*10000000;
      $('#img').attr('src',src);
    }
        /*    $.validator.setDefaults({
    submitHandler: function() {
      alert("提交事件!");
    }
});*/

  /*  function(result){
        alert(result);
        if(result==1){
        $("#phonehint").html("<span style='color: rgb(255, 0, 0);'>*验证码正确！</span>");
        }else{
        $("#phonehint").html("<span style='color: rgb(0, 255, 0);'>*验证码错误</span>");
        }
*/  

    
/*    $(document).ready(function(){
  $("#sub").click(function(){
  $.ajax({
    data: {captcha:$("#captcha").val()},
    url:"<?php echo U('Index/changeTableVal2');?>",

    async:flase,
    success:function(data){
      alert("1223");
  
    }


    }


    );
  });
});*/

  
 function majax(){  
  $.ajax({  
        type : "POST",  //提交方式  
        url : "{:U('Index/changeTableVal2')}",//路径
          dataType: "json",  
        data : {captcha:$("#captcha").val()},//数据，这里使用的是Json格式进行传输  
        success : function(result) ", true);  */
            } else {  
               alert(result); 
              /*  $("#tipMsg").text("删除数据失败");  */
            }  
        }  
         });}



$().ready(function() {



// 在键盘按下并释放及提交后验证提交表单
  $("#signupForm").validate({
      rules: {
        name: {
          required: true,
          minlength: 2
        },
      www:{
       minlength: 5 
      },
        email: {
          email: true
        },
        message: {
          required: true
        }
      },
      messages: {
      qname: {
          required: "亲，请输入用户名哦！",
          minlength: "用户名必需由两个字母组成"
        },
      www: {
          minlength: "请输入合法网址"        
      },
        email: "请输入一个正确的邮箱",
      }
  });
});
</script>
          <form class="cmxform" id="signupForm" method="post" action="<?php echo U('Index/changeTableVal2');?>" style=" width: 92%; margin: auto;">
            <input type="hidden" name="table" value="cus_msg">
            <p>
              <label for="username">名称</label>
              <input id="username" placeholder="请输入你的名称" required="required" name="name" type="text">(必填)
            </p>
            <p>
              <label for="email">邮箱</label>
              <input id="email" placeholder="请输入你的邮箱" name="email" type="email">
            </p>
            <p>
              <label for="www">网址</label>
              <input id="www" placeholder="请输入你的网址" name="www" type="text">
            </p>
            <p>
              <textarea rows="5" cols="20" name="message" placeholder="留言不得为空"  required="required"></textarea>
            </p>
            <p><label for="www">验证码</label>
<!--               <img src="<?php echo U('Admin/Admin/captcha');?>" >  -->
                 <input class="input-text size-L" type="text" name="captcha" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}" value="验证码:" style="width:150px;">
            <img src="<?php echo U('Base/verify');?>" id="img" onclick="this.src=this.src+'?'+Math.random();"> 
            <a id="kanbuq" href="javascript:;" onclick="refresh()">看不清，换一张</a>
            </p>
            <p>
              <input class="button" type="submit" onclick="majax()"  value="提交评论">
            </p>


          </form>
        </div>

      </div>

      <div class="fu_left shipin-right">
        <div class="yxxz_right yxxz_right2" style=" position:relative">
          <img src="/Public/Home/images/a_20.png" class="ico2">
          <p class="youxi youxi3">
            <span>推荐游戏</span>
            <br class="qc">
          </p>

          <ul class="left_yx">
            <?php if(is_array($down2)): foreach($down2 as $key=>$v): ?><li><img class="le_ft_iamg" src="<?php echo ($v["original_img"]); ?>" alt="<?php echo ($v["goods_name"]); ?>">
              <p><?php echo ($v["goods_name"]); ?><br />
                <span>大小 <?php echo ($v["store_count"]); ?>M</span></p>
              <div class="oz">
                <a class="fl bgPng s_3 s_4" href="<?php echo U('Goods-page',array('goodsid'=>$v['goods_id']));?>">游戏下载</a>
              </div>

            </li><?php endforeach; endif; ?>
          </ul>
        </div>

        <div class="yxxz_right yxxz_right2" style="position:relative">
          <img src="/Public/Home/images/a_20.png" class="ico2">
          <p class="youxi youxi3">
            <span>热门文章</span>
          </p>
          <br class="qc">

          <ul class="index-news majiang-right">
            <?php if(is_array($newshot)): foreach($newshot as $key=>$v): ?><li>
              <a href="">
                <img class="" src="<?php echo ($v["thumb"]); ?>" alt="">
                <h4><?php echo ($v["title"]); ?></h4>
              <!--   <p>点赞：<?php echo ($v["click"]); ?></p> -->
                <time><?php echo (date("Y-m-d H:i",$v["publish_time"])); ?></time>
              </a>
            </li><?php endforeach; endif; ?>
            
          </ul>
        </div>

        <div class="yxxz_right yxxz_right2" style="margin-top: 8px; position:relative">
          <img src="/Public/Home/images/a_20.png" class="ico2" data-bd-imgshare-binded="1">
          <p class="youxi youxi3">
            <span>热门视频</span>
          </p>
          <br class="qc">

          <ul class="index-news majiang-right">
            <?php if(is_array($ship)): foreach($ship as $key=>$v): ?><li>
              <a href="#">
                <video src="<?php echo ($v["link"]); ?>" poster="/Public/Home/images/5ad961c494ac3.jpg" controls=""></video>
                <h4><?php echo ($v["title"]); ?></h4>
                <time><span style="margin-right: 14px;">播放</span><?php echo (date("Y/m月/d日 h:i:s",$v["publish_time"])); ?></time>
              </a>
            </li><?php endforeach; endif; ?>
          </ul>
        </div>

      </div>
      <br class="qc">
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
	 <!-- 评论相关js -->
	<script type="text/javascript" src="/Public/Home/js/jquery.flexText.js"></script>
	<!--textarea高度自适应-->
	<script type="text/javascript">
	  $(function() {
	    $('.content').flexText();
	  });
	</script>
	<!--textarea限制字数-->
	<script type="text/javascript">
	  function keyUP(t) {
	    var len = $(t).val().length;
	    if (len >129) {
	      $(t).val($(t).val().substring(0, 120));
	    }
	  }
	</script>
	<!--点击评论创建评论条-->
	<script type="text/javascript">
	  $('.commentAll').on('click', '.plBtn', function() {
	    var myDate = new Date();
	    //获取当前年
	    var year = myDate.getFullYear();
	    //获取当前月
	    var month = myDate.getMonth() + 1;
	    //获取当前日
	    var date = myDate.getDate();
	    var h = myDate.getHours(); //获取当前小时数(0-23)
	    var m = myDate.getMinutes(); //获取当前分钟数(0-59)
	    if (m < 10) m = '0' + m;
	    var s = myDate.getSeconds();
	    if (s < 10) s = '0' + s;
	    var now = year + '-' + month + "-" + date + " " + h + ':' + m + ":" + s;
	    //获取输入内容
	    var oSize = $(this).siblings('.flex-text-wrap').find('.comment-input').val();
	    console.log(oSize);
	    //动态创建评论模块
	    oHtml =
	      '<div class="comment-show-con clearfix"><div class="comment-show-con-img pull-left"><img src="images/header-img-comment_03.png" alt=""></div> <div class="comment-show-con-list pull-left clearfix"><div class="pl-text clearfix"> <a href="#" class="comment-size-name">David Beckham : </a> <span class="my-pl-con">&nbsp;' +
	      oSize + '</span> </div> <div class="date-dz"> <span class="date-dz-left pull-left comment-time">' + now +
	      '</span> <div class="date-dz-right pull-right comment-pl-block"><a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div><div class="hf-list-con"></div></div> </div>';
	    if (oSize.replace(/(^\s*)|(\s*$)/g, "") != '') {
	      $(this).parents('.reviewArea ').siblings('.comment-show').prepend(oHtml);
	      $(this).siblings('.flex-text-wrap').find('.comment-input').prop('value', '').siblings('pre').find('span').text(
	        '');
	    }
	  });
	</script>
	<!--点击回复动态创建回复块-->
	<script type="text/javascript">
	  $('.comment-show').on('click', '.pl-hf', function() {
	    //获取回复人的名字
	    var fhName = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.pl-text').find('.comment-size-name')
	      .html();
	    //回复@
	    var fhN = '回复@' + fhName;
	    //var oInput = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.hf-con');
	    var fhHtml =
	      '<div class="hf-con pull-left"> <textarea class="content comment-input hf-input" placeholder="" onkeyup="keyUP(this)"></textarea> <a href="javascript:;" class="hf-pl">评论</a></div>';
	    //显示回复
	    if ($(this).is('.hf-con-block')) {
	      $(this).parents('.date-dz-right').parents('.date-dz').append(fhHtml);
	      $(this).removeClass('hf-con-block');
	      $('.content').flexText();
	      $(this).parents('.date-dz-right').siblings('.hf-con').find('.pre').css('padding', '6px 15px');
	      //console.log($(this).parents('.date-dz-right').siblings('.hf-con').find('.pre'))
	      //input框自动聚焦
	      $(this).parents('.date-dz-right').siblings('.hf-con').find('.hf-input').val('').focus().val(fhN);
	    } else {
	      $(this).addClass('hf-con-block');
	      $(this).parents('.date-dz-right').siblings('.hf-con').remove();
	    }
	  });
	</script>
	<!--评论回复块创建-->
	<script type="text/javascript">
	  $('.comment-show').on('click', '.hf-pl', function() {
	    var oThis = $(this);
	    var myDate = new Date();
	    //获取当前年
	    var year = myDate.getFullYear();
	    //获取当前月
	    var month = myDate.getMonth() + 1;
	    //获取当前日
	    var date = myDate.getDate();
	    var h = myDate.getHours(); //获取当前小时数(0-23)
	    var m = myDate.getMinutes(); //获取当前分钟数(0-59)
	    if (m < 10) m = '0' + m;
	    var s = myDate.getSeconds();
	    if (s < 10) s = '0' + s;
	    var now = year + '-' + month + "-" + date + " " + h + ':' + m + ":" + s;
	    //获取输入内容
	    var oHfVal = $(this).siblings('.flex-text-wrap').find('.hf-input').val();
	    console.log(oHfVal)
	    var oHfName = $(this).parents('.hf-con').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
	    var oAllVal = '回复@' + oHfName;
	    if (oHfVal.replace(/^ +| +$/g, '') == '' || oHfVal == oAllVal) {
	
	    } else {
	      $.getJSON("json/pl.json", function(data) {
	        var oAt = '';
	        var oHf = '';
	        $.each(data, function(n, v) {
	          delete v.hfContent;
	          delete v.atName;
	          var arr;
	          var ohfNameArr;
	          if (oHfVal.indexOf("@") == -1) {
	            data['atName'] = '';
	            data['hfContent'] = oHfVal;
	          } else {
	            arr = oHfVal.split(':');
	            ohfNameArr = arr[0].split('@');
	            data['hfContent'] = arr[1];
	            data['atName'] = ohfNameArr[1];
	          }
	
	          if (data.atName == '') {
	            oAt = data.hfContent;
	          } else {
	            oAt = '回复<a href="#" class="atName">@' + data.atName + '</a> : ' + data.hfContent;
	          }
	          oHf = data.hfName;
	        });
	
	        var oHtml =
	          '<div class="all-pl-con"><div class="pl-text hfpl-text clearfix"><a href="#" class="comment-size-name">我的名字 : </a><span class="my-pl-con">' +
	          oAt + '</span></div><div class="date-dz"> <span class="date-dz-left pull-left comment-time">' + now +
	          '</span> <div class="date-dz-right pull-right comment-pl-block"> <a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div></div>';
	        oThis.parents('.hf-con').parents('.comment-show-con-list').find('.hf-list-con').css('display', 'block').prepend(
	            oHtml) && oThis.parents('.hf-con').siblings('.date-dz-right').find('.pl-hf').addClass('hf-con-block') &&
	          oThis.parents('.hf-con').remove();
	      });
	    }
	  });
	</script>
	<!--删除评论块-->
	<script type="text/javascript">
	  $('.commentAll').on('click', '.removeBlock', function() {
	    var oT = $(this).parents('.date-dz-right').parents('.date-dz').parents('.all-pl-con');
	    if (oT.siblings('.all-pl-con').length >= 1) {
	      oT.remove();
	    } else {
	      $(this).parents('.date-dz-right').parents('.date-dz').parents('.all-pl-con').parents('.hf-list-con').css(
	        'display', 'none')
	      oT.remove();
	    }
	    $(this).parents('.date-dz-right').parents('.date-dz').parents('.comment-show-con-list').parents(
	      '.comment-show-con').remove();
	
	  })
	</script>
	<!--点赞-->
	<script type="text/javascript">
	  $('.comment-show').on('click', '.date-dz-z', function() {
	    var zNum = $(this).find('.z-num').html();
	    if ($(this).is('.date-dz-z-click')) {
	      zNum--;
	      $(this).removeClass('date-dz-z-click red');
	      $(this).find('.z-num').html(zNum);
	      $(this).find('.date-dz-z-click-red').removeClass('red');
	    } else {
	      zNum++;
	      $(this).addClass('date-dz-z-click');
	      $(this).find('.z-num').html(zNum);
	      $(this).find('.date-dz-z-click-red').addClass('red');
	    }
	  })
	</script>
</html>