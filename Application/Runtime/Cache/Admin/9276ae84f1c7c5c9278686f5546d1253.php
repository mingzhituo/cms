<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<link rel="stylesheet" type="text/css" href="/Public/webuploader/0.1.5/webuploader.css">
<style type="text/css">
	#filePicker1 div:nth-child(2){
		width: 104px !important;
		height: 42px !important;
	}
	.itemajax span div:nth-child(2){
		width: 35px !important;
		height: 35px !important;
	}
</style>
<script type="text/javascript" src="/Public/js/global.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加游戏</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container" id="slideTxtBox">
	<div class="hd" style="width:80%; margin:0 auto;">
		<ul>
			<li class="btn btn-primary radius active">产品信息</li>
			<li class="btn btn-primary radius">产品相册</li>
			<li class="btn btn-primary radius">产品属性</li>
		</ul>
	</div>
	<form class="form form-horizontal" id="form-admin-add">
	<div class="bd">
	<!-- 基本信息开始 -->
	<div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>游戏名称:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["goods_name"]); ?>" placeholder="游戏名称" id="goods_name" name="goods_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">游戏简介:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="goods_remark" name="goods_remark" type="text/plain" style="width:100%;height:400px;"><?php echo (htmlspecialchars_decode($goodsInfo["goods_remark"])); ?></script>
			</div>
		</div>
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">游戏货号:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["goods_sn"]); ?>" id="goods_sn" name="goods_sn">
			</div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">是否推荐:</label>
			<div class="radio-box">
				<input name="is_hot" type="radio" value="1" <?php if($goodsInfo["is_hot"] == 1): ?>checked<?php endif; ?>>
				<label for="sex-1">是</label>
			</div>
			<div class="radio-box">
				<input type="radio" name="is_hot" value="0" <?php if($goodsInfo["is_hot"] == 0): ?>checked<?php endif; ?>>
				<label for="sex-2">否</label>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">适配系统:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["consult"]); ?>" id="consult" name="consult">
			</div>
		</div>			
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>游戏分类:</label>
			<div class="formControls col-xs-8 col-sm-3"> 
				<span class="select-box">
				<select name="cat_id" id="cat_id" class="select" onchange="get_category(this.value,'cat_id_2','0');">
					<option value="0">请选择游戏分类</option>
					<?php if(is_array($cat_list)): foreach($cat_list as $k=>$v): ?><option value="<?php echo ($v['id']); ?>" <?php if($v['id'] == $level_cat['1']): ?>selected<?php endif; ?>>
                   		<?php echo ($v['name']); ?>
                   		</option><?php endforeach; endif; ?>
				</select>
				</span> 
			</div>
			<div class="formControls col-xs-8 col-sm-3"> 
				<span class="select-box">
				<select name="cat_id_2" id="cat_id_2" class="select" onchange="get_category(this.value,'cat_id_3','0');">
					<option value="0">请选择游戏分类</option>
				cat_id_3</select>
				</span> 
			</div>
			<!-- <div class="formControls col-xs-8 col-sm-3"> 
				<span class="select-box">
				<select name="cat_id_3" id="cat_id_3" class="select">
					<option value="0">请选择游戏分类</option>
				</select>
				</span> 
			</div>	 -->					
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">安卓下载地址:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["send_time"]); ?>" id="send_time" name="send_time">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">苹果下载地址:</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["sale_address"]); ?>" placeholder="" id="sale_address" name="sale_address">
			</div>&nbsp;
		</div>	
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">软件大小(M为单位):</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["store_count"]); ?>" placeholder="" id="store_count" name="store_count">
			</div>
		</div>
		<!-- <div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">本店售价:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["shop_price"]); ?>" placeholder="" id="shop_price" name="shop_price" onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" onpaste="this.value=this.value.replace(/[^\d.]/g,'')">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">市场价:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["market_price"]); ?>" placeholder="" id="market_price" name="market_price" onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" onpaste="this.value=this.value.replace(/[^\d.]/g,'')">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">成本价:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["cost_price"]); ?>" placeholder="" id="cost_price" name="cost_price" onkeyup="this.value=this.value.replace(/[^\d.]/g,'')" onpaste="this.value=this.value.replace(/[^\d.]/g,'')">
			</div>
		</div> -->
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">上传游戏图片:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list">
						<img src="<?php echo ($goodsInfo["original_img"]); ?>" alt="" style="width:120px; height:90px;">
						<div class="info"></div>
						<p class="state"></p>
					</div>
					<div id="fileList" class="uploader-list"></div>
					<div id="filePicker">选择图片</div>
					<span id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</span>
				</div>
				<input id="original_img" type="hidden" name="original_img" value="<?php echo ($goodsInfo["original_img"]); ?>">					
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">游戏版本:</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["sales_sum"]); ?>" placeholder="" id="sales_sum" name="sales_sum">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">评分:</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["click_count"]); ?>" placeholder="" id="click_count" name="click_count">
			</div>
		</div>
																				
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">游戏关键词:</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["keywords"]); ?>" placeholder="" id="keywords" name="keywords">
			</div>用空格分隔
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">语言:</label>
			<div class="formControls col-xs-8 col-sm-6">
				<input type="text" class="input-text" value="<?php echo ($goodsInfo["desc"]); ?>" placeholder="" id="desc" name="desc">
			</div>用空格分隔
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">游戏详情描述:</label>
			<div class="formControls col-xs-8 col-sm-9">
				<script id="goods_content" name="goods_content" type="text/plain" style="width:100%;height:400px;"><?php echo (htmlspecialchars_decode($goodsInfo["goods_content"])); ?></script>
			</div>
		</div>		
	</div>			
	<!-- 基本信息结束 -->
	<!-- 游戏相册开始 -->
	<div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">游戏相册:</label>
			<div class="formControls col-xs-8 col-sm-9">		
				<div class="uploader-list-container">
					<div class="queueList">
						<ul class="filelist">
							<?php if(is_array($goodsImages)): foreach($goodsImages as $k=>$vo): ?><li id="upload">
									<p class="imgWrap">
										<img src="<?php echo ($vo['image_url']); ?>" alt="">
										<input type="hidden" name="goods_images[]" value="<?php echo ($vo['image_url']); ?>">
									</p>
									<div class="file-panel" style="height: 0px;">
										<span onclick="ClearPicArr2(this,'<?php echo ($vo['image_url']); ?>')" class="cancel">删除</span>
									</div>
								</li><?php endforeach; endif; ?>
						</ul>
					</div>				
					<div class="statusBar">
						<div class="progress"> <span class="text">0%</span> <span class="percentage"></span> </div>
						<div class="info"></div>
						<div class="btns">
							<div id="filePicker1">选择图片</div>
							<div class="uploadBtn">开始上传</div>
						</div>
					</div> 
				</div>
			</div>
		</div>				
	</div>
	<!-- 游戏相册结束 -->
	
	<!-- 游戏属性开始 -->
	<div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>游戏属性:</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<span class="select-box">
				<select name="goods_type" id="goods_type" class="select">
					<option value="0">选择游戏属性</option>
					<?php if(is_array($goodsType)): foreach($goodsType as $k=>$vo): ?><option value="<?php echo ($vo["id"]); ?>"<?php if($goodsInfo[goods_type] == $vo[id]): ?>selected="selected"<?php endif; ?> ><?php echo ($vo["name"]); ?></option>
						<?php echo ($vo["name"]); ?>
                    </option><?php endforeach; endif; ?>
				</select>
				</span>
				<table class="table table-border table-bordered radius table-hover" id="goods_attr_table"></table>
			</div>									
		</div>				
	</div>
	<!-- 游戏属性结束 -->
		
	</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
		        <input type="hidden" name="act" value="<?php echo ($act); ?>">
		        <input type="hidden" name="goods_id" value="<?php echo ($goodsInfo['goods_id']); ?>">
				<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
</article>
<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/SuperSlde2.1.1/jquery.SuperSlide.2.1.1.source.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/Public/webuploader/uploads.js"></script>
<script type="text/javascript" src="/Public/webuploader/upload.js"></script>
<script type="text/javascript" src="/Public/webuploader/uploadSpec.js"></script>
<script type="text/javascript">
function choosebox(o){
	var vt = $(o).is(':checked');
	if(vt){
		$('input[type=checkbox]').prop('checked',vt);
	}else{
		$('input[type=checkbox]').removeAttr('checked');
	}
}
$(function(){
	$(":checkbox[cka]").click(function(){
		var $cks = $(":checkbox[ck='"+$(this).attr("cka")+"']");
		if($(this).is(':checked')){
			$cks.each(function(){$(this).prop("checked",true);});
		}else{
			$cks.each(function(){$(this).removeAttr('checked');});
		}
	});

	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	jQuery("#slideTxtBox").slide({trigger:"click",titOnClassName:"active"});

	$("#form-admin-add").validate({
		rules:{
			goods_name:{
				required:true,
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			sort_order:{
				required:true,
				number:true
			},
			phone:{
				required:true,
				isPhone:true,
			},
			email:{
				required:true,
				email:true,
			},
			adminRole:{
				required:true,
			},
		},
		onkeyup:false,
		focusCleanup:true,
		success:"valid",
		submitHandler:function(form){
			var index = parent.layer.getFrameIndex(window.name);
			$(form).ajaxSubmit({
				type: 'post',
				url: "/index.php/Admin/Goods/goodsHandle" ,
				success: function(data){
					if (data.status==1) {
						layer.msg(data.msg,{icon:1,time:1000});
						setInterval(function(){
							parent.layer.close(index);
						},1000);
						parent.window.location.href="/index.php/Admin/Goods/goodsList/cat_id/<?php echo ($sta); ?>";
					}else{
						layer.msg(data.msg,{icon:2,time:1000});
					}
					
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('网络故障，请联系管理员!',{icon:0,time:1000});
				}
			});
			parent.$('.btn-refresh').click();
		}
	});
});
$(function(){
	var ue = UE.getEditor('goods_content');
	var ue2 = UE.getEditor('goods_remark');
});

$(document).ready(function(){
    $(":checkbox[cka]").click(function(){
        var $cks = $(":checkbox[ck='"+$(this).attr("cka")+"']");
        if($(this).is(':checked')){
            $cks.each(function(){$(this).prop("checked",true);});
        }else{
            $cks.each(function(){$(this).removeAttr('checked');});
        }
    });
});

function choosebox(o){
    var vt = $(o).is(':checked');
    if(vt){
        $('input[type=checkbox]').prop('checked',vt);
    }else{
        $('input[type=checkbox]').removeAttr('checked');
    }
}
/** 以下 游戏属性相关 js*/
$(document).ready(function(){
	
    // 游戏类型切换时 ajax 调用  返回不同的属性输入框
    $("#goods_type").change(function(){        
        var goods_id = $("input[name='goods_id']").val();
        var type_id = $(this).val();
            $.ajax({
                    type:'GET',
                    data:{goods_id:goods_id,type_id:type_id}, 
                    url:"/index.php/Admin/Goods/ajaxGetAttrInput",
                    success:function(data){                            
                            $("#goods_attr_table tr").remove()
                            // $("#goods_attr_table tr:gt(0)").remove()
                            $("#goods_attr_table").append(data);
                    }        
            });			                
    });
	// 触发游戏类型
	$("#goods_type").trigger('change');
    $("input[name='exchange_integral']").blur(function(){
        var shop_price = parseInt($("input[name='shop_price']").val());
        var exchange_integral = parseInt($(this).val());
        if (shop_price * 100 < exchange_integral) {

        }
    });
});
 

// 属性输入框的加减事件
function addAttr(a)
{
	var attr = $(a).parent().parent().prop("outerHTML");	
	attr = attr.replace('addAttr','delAttr').replace('+','-');	
	$(a).parent().parent().after(attr);
}
// 属性输入框的加减事件
function delAttr(a)
{
   $(a).parent().parent().remove();
}
 

/** 以下 游戏规格相关 js*/
$(document).ready(function(){
	
    // 游戏类型切换时 ajax 调用  返回不同的属性输入框
    $("#spec_type").change(function(){        
        var goods_id = '<?php echo ($goodsInfo["goods_id"]); ?>';
        var spec_type = $(this).val();
            $.ajax({
                    type:'GET',
                    data:{goods_id:goods_id,spec_type:spec_type}, 
                    url:"<?php echo U('admin/Goods/ajaxGetSpecSelect');?>",
                    success:function(data){                            
                           $("#ajax_spec_data").html('')
                           $("#ajax_spec_data").append(data);
						   //alert('132');
						   ajaxGetSpecInput();	// 触发完  马上处罚 规格输入框
                    }
            });			                
    });
	// 触发游戏规格
	$("#spec_type").trigger('change'); 
});

uploadOne('/index.php/Admin/Uploadify/webupload','#original_img');
uploads('/index.php/Admin/Uploadify/webupload','goods_images[]');


/** 以下是编辑时默认选中某个游戏分类*/
$(document).ready(function(){

	<?php if($level_cat['2'] > 0): ?>// 游戏分类第二个下拉菜单
		 get_category('<?php echo ($level_cat[1]); ?>','cat_id_2','<?php echo ($level_cat[2]); ?>');<?php endif; ?>
	<?php if($level_cat['3'] > 0): ?>// 游戏分类第二个下拉菜单
		 get_category('<?php echo ($level_cat[2]); ?>','cat_id_3','<?php echo ($level_cat[3]); ?>');<?php endif; ?>

    //  扩展分类
	<?php if($level_cat2['2'] > 0): ?>// 游戏分类第二个下拉菜单
		 get_category('<?php echo ($level_cat2[1]); ?>','extend_cat_id_2','<?php echo ($level_cat2[2]); ?>');<?php endif; ?>
	<?php if($level_cat2['3'] > 0): ?>// 游戏分类第二个下拉菜单
		 get_category('<?php echo ($level_cat2[2]); ?>','extend_cat_id_3','<?php echo ($level_cat2[3]); ?>');<?php endif; ?>

});

$('ul.filelist li').on( 'mouseenter', function() {
     $(this).find('.file-panel').stop().animate({height: 30});
})

$('ul.filelist li').on( 'mouseleave', function() {
   $(this).find('.file-panel').stop().animate({height: 0});
});
/*
 * 上传之后删除组图input     
 * @access   public
 * @val      string  删除的图片input
 */
function ClearPicArr2(obj,path)
{
	var msg = "您真的确定要删除吗？\n\n请确认！";
	if (confirm(msg)!=true){
		return false;
	}   	
	$.ajax({
                type:'GET',
                url:"<?php echo U('Admin/Uploadify/delupload');?>",
                data:{action:"del", filename:path},
                success:function(){
                       $(obj).parent().parent().remove(); // 删除完服务器的, 再删除 html上的图片				 
                }
	});
	// 删除数据库记录
	$.ajax({
                type:'GET',
                url:"<?php echo U('Admin/Goods/del_goods_images');?>",
                data:{filename:path},
                success:function(){
                      //		 
                }
	});		
}
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>