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

<link rel="stylesheet" href="/Public/Home/css/style8.css">
<style type="text/css">
	.flex-text-wrap textarea {line-height: unset;}
</style>
        <div class="auto nei">

            <p class="weizhi"> 当前位置：
                <a href="#">首页</a>&gt;&gt;<a href="#"><?php echo ($now["cat_name"]); ?></a>
            </p>

            <div class="fu_right news-index shipin-index">
                <div class="nei_left table2 video-shipin">
                    <video src="<?php echo ($on["link"]); ?>" poster="/Public/Home/images/5ad961c494ac3.jpg" controls=""></video>
                    <h3><?php echo ($on["title"]); ?></h3>
                    <ul class="news-index-ul">
                        <li>播放次数:<?php echo ($on["click"]); ?></li>
                        <li>发布时间:<?php echo (date("Y-m-y h:i:s",$on["publish_time"])); ?></li>
                        <li>来源:<?php echo ($on["company_name"]); ?></li>
                        <li class="zan"><i class="date-dz-z-click-red"></i><span>17</span></li>
                    </ul>
                    <!-- 百度分享 -->
                    <div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone"
                         data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#"
                         class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a
                         href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                    <script>
                        window._bd_share_config = {
                            "common": {
                                "bdSnsKey": {},
                                "bdText": "",
                                "bdMini": "2",
                                "bdPic": "",
                                "bdStyle": "0",
                                "bdSize": "16"
                            },
                            "share": {},
                            "image": {
                                "viewList": ["qzone", "tsina", "tqq", "renren", "weixin"],
                                "viewText": "分享到：",
                                "viewSize": "16"
                            },
                            "selectShare": {
                                "bdContainerClass": null,
                                "bdSelectMiniList": ["qzone", "tsina", "tqq", "renren", "weixin"]
                            }
                        };
                        with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src =
                            'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
                    </script>

                </div>
                <!-- 评论  -->
                <div class="nei_left table2" style="margin-top: 3%;">
                    <div class="commentAll">
                        <!--评论区域 begin-->
                        <div class="reviewArea clearfix">
                            <textarea class="content comment-input" placeholder="请输入你想要评论的内容" onkeyup="keyUP(this)"></textarea>
                            <a href="javascript:;" class="plBtn">评论</a>
                        </div>
                        <!--评论区域 end-->
                        <!--回复区域 begin-->
                      <!--   <div class="comment-show">
                            <div class="comment-show-con clearfix">
                                <div class="comment-show-con-img pull-left"><img src="images/header-img-comment_03.png" alt=""></div>
                                <div class="comment-show-con-list pull-left clearfix">
                                    <div class="pl-text clearfix">
                                        <a href="#" class="comment-size-name">张三 : </a>
                                        <span class="my-pl-con">&nbsp;来啊 造作啊!</span>
                                    </div>
                                    <div class="date-dz">
                                        <span class="date-dz-left pull-left comment-time">2017-5-2 11:11:39</span>
                                        <div class="date-dz-right pull-right comment-pl-block">
                                            <a href="#" class="removeBlock">删除</a>
                                            <a href="javascript:" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
                                            <span class="pull-left date-dz-line">|</span>
                                            <a href="#" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a>
                                        </div>
                                    </div>
                                    <div class="hf-list-con"></div>
                                </div>
                            </div>
                        </div> -->
                        <!--回复区域 end-->
                    </div>

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

            <li><img class="le_ft_iamg" src="/Public/Home/images/5ad1a8e5ab439.png" alt="阿闪打拱">
              <p>阿闪打拱<br />
                <span>棋牌 34.5M</span></p>
              <div class="oz">
                <a class="fl bgPng s_3 s_4" href="/paohuzi/41.html">游戏下载</a>
              </div>

            </li>
         
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
                <time>06/27</time>
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


        <script type="text/javascript" src="/Public/Home/js/min.js"></script>
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

        <script>
            var _content1 = [];
            var _content2 = [];
            var _content3 = [];
            var _content4 = []; //临时存储li循环内容
            var _content5 = [];

            var lanren = {
                _default: 8, //默认显示图片个数
                _loading: 8, //每次点击按钮后加载的个数
                init: function(a, b, c, d) {
                    var lis = a;
                    $(b).html("");
                    for (var n = 0; n < lanren._default; n++) {
                        lis.eq(n).appendTo(b);
                    }

                    for (var i = lanren._default; i < lis.length; i++) {
                        d.push(lis.eq(i));
                    }
                    $(c).html('');
                },
                loadMore: function(a, b) {
                    $(a).click(function() {
                        var o = $(this).parent().children("ul.new_lst2");
                        for (var i = 0; i < lanren._loading; i++) {
                            var target = b.shift();
                            if (!target) {
                                $(this).html("<p class='quanbu'>全部加载完毕...</p>");
                                break;
                            }
                            o.append(target);
                        }

                    })

                }
            }



            lanren.init($(".d1 .hidden li"), ".d1 .new_lst", ".d1 .hidden", _content1);
            lanren.loadMore('.d1 .more2', _content1)

            lanren.init($(".d2 .hidden li"), ".d2 .new_lst", ".d2 .hidden", _content2);
            lanren.loadMore('.d2 .more2', _content2)

            lanren.init($(".d3 .hidden li"), ".d3 .new_lst", ".d3 .hidden", _content3);
            lanren.loadMore('.d3 .more2', _content3)

            lanren.init($(".d4 .hidden li"), ".d4 .new_lst", ".d4 .hidden", _content4);
            lanren.loadMore('.d4 .more2', _content4)

            lanren.init($(".d5 .hidden li"), ".d5 .new_lst", ".d5 .hidden", _content5);
            lanren.loadMore('.d5 .more2', _content5)
        </script>
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
                if (len > 139) {
                    $(t).val($(t).val().substring(0, 140));
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
                    '</span> <div class="date-dz-right pull-right comment-pl-block"><a href="#" class="removeBlock">删除</a> <a href="javascript:" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="#" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div><div class="hf-list-con"></div></div> </div>';
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
                    '<div class="hf-con pull-left"> <textarea class="content comment-input hf-input" placeholder="" onkeyup="keyUP(this)"></textarea> <a href="#" class="hf-pl">评论</a></div>';
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
                                oAt = '回复<a href="javascript:" class="atName">@' + data.atName + '</a> : ' + data.hfContent;
                            }
                            oHf = data.hfName;
                        });

                        var oHtml =
                            '<div class="all-pl-con"><div class="pl-text hfpl-text clearfix"><a href="#" class="comment-size-name">我的名字 : </a><span class="my-pl-con">' +
                            oAt + '</span></div><div class="date-dz"> <span class="date-dz-left pull-left comment-time">' + now +
                            '</span> <div class="date-dz-right pull-right comment-pl-block"> <a href="#" class="removeBlock">删除</a> <a href="javascript:" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="#" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div></div>';
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
    </body>
</html>