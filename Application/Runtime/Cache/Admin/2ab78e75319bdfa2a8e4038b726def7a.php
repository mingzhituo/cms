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
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加广告</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类名：</label>
		<div class="formControls col-xs-8 col-sm-5">
			<input type="text" class="input-text" value="<?php echo ($cat_info['cat_name']); ?>" placeholder="" id="cat_name" name="cat_name">
		</div>
		<span>这将是该分类在站点上显示的名字。</span>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>别名：</label>
		<div class="formControls col-xs-8 col-sm-5">
			<input type="text" class="input-text" value="<?php echo ($cat_info['cat_alias']); ?>" placeholder="" id="cat_alias" name="cat_alias">
		</div>
	</div>			
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">上级分类：</label>
		<div class="formControls col-xs-8 col-sm-8"> 
			<span class="select-box" style="width:150px;">
				<select class="select" name="parent_id" size="1">
					<option value="0">顶级分类</option>
					<?php echo ($cat_select); ?>
				</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">导航显示：</label>
			<div class="radio-box">
				<input name="show_in_nav" type="radio" id="sex-1" value="1" <?php if($result["show_in_nav"] == 1): ?>checked<?php endif; ?>>
				<label for="sex-1">显示</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="sex-2" name="show_in_nav" value="0" <?php if($result["show_in_nav"] == 0): ?>checked<?php endif; ?>>
				<label for="sex-2">隐藏</label>
			</div>
	</div>		
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>显示排序：</label>
		<div class="formControls col-xs-8 col-sm-7">
			<input type="text" class="input-text" value="<?php echo ($cat_info["sort_order"]); ?>" placeholder="" id="sort_order" name="sort_order">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>描述：</label>
		<div class="formControls col-xs-8 col-sm-7">
			<textarea name="cat_desc" cols="" rows="" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"><?php echo ($cat_info['cat_desc']); ?></textarea>
			<p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
	        <input type="hidden" name="act" value="<?php echo ($act); ?>">
	        <input type="hidden" name="cat_id" value="<?php echo ($cat_info['cat_id']); ?>">
			<input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
		</div>
	</div>
	</form>
</article>
<!--_footer 作为公共模版分离出去--> 
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/Public/webuploader/upload.js"></script>
<script type="text/javascript">
$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	
	$("#form-admin-add").validate({
		rules:{
			username:{
				required:true,
				minlength:4,
				maxlength:16
			},
			password:{
				required:true,
			},
			password2:{
				required:true,
				equalTo: "#password"
			},
			sex:{
				required:true,
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
				url: "/index.php/Admin/Article/categoryHandle" ,
				success: function(data){
					if (data.status==1) {
						layer.msg(data.msg,{icon:1,time:2000});
						setInterval(function(){
							parent.layer.close(index);
						},2000);
						parent.location.reload(true);
					}else{
						layer.msg(data.msg,{icon:2,time:1000});
					}
					
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('网络故障，请联系管理员!',{icon:0,time:1000});
				}
			});
			// parent.$('.btn-refresh').click();
		}
	});
});
uploadOne('/index.php/Admin/uploadify/webupload','#ad_code');
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>