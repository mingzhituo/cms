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
<script type="text/javascript" src="/Public/js/global.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>添加属性</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>属性名称：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($goodsAttribute["attr_name"]); ?>" placeholder="属性名称" id="attr_name" name="attr_name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属商品类型：</label>
		<div class="formControls col-xs-8 col-sm-9"> 
			<span class="select-box" style="width:150px;">
				<select class="select"  name="type_id" id="type_id" size="1">
	                 <option value="">请选择</option>
	                <?php if(is_array($goodsTypeList)): $i = 0; $__LIST__ = $goodsTypeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo[id]); ?>" <?php if($vo[id] == $goodsAttribute[type_id]): ?>selected="selected"<?php endif; ?>><?php echo ($vo[name]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>                                        
				</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>能否进行检索：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<input type="radio" id="attr_index" name="attr_index" value="0" <?php if($goodsAttribute[attr_index] == 0): ?>checked="checked"<?php endif; ?>>
				<label for="attr_index">不需要检索</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="attr_index" name="attr_index" value="1" <?php if(($goodsAttribute[attr_index] == 1) or ($goodsAttribute[attr_index] == NULL)): ?>checked="checked"<?php endif; ?>>
				<label for="attr_index">关键字检索</label>
			</div>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>该属性值的录入方式：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="radio-box">
				<input type="radio" id="attr_input_type" name="attr_input_type" value="0" <?php if(($goodsAttribute[attr_input_type] == 0) or ($goodsAttribute[attr_input_type] == NULL)): ?>checked="checked"<?php endif; ?>>
				<label for="attr_input_type">手工录入</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="attr_input_type" name="attr_input_type" value="1" <?php if($goodsAttribute[attr_input_type] == 1): ?>checked="checked"<?php endif; ?>>
				<label for="attr_input_type">从下面的列表中选择（一行代表一个可选值）</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="attr_input_type" name="attr_input_type" value="2" <?php if($goodsAttribute[attr_input_type] == 2): ?>checked="checked"<?php endif; ?>>
				<label for="attr_input_type">多行文本框</label>
			</div>			
		</div>
	</div>	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>可选值列表：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<textarea name="attr_values" id="attr_values" cols="30" rows="5"><?php echo ($goodsAttribute["attr_values"]); ?></textarea>录入方式为手工或者多行文本时，此输入框不需填写。	
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
	        <input type="hidden" name="act" value="<?php echo ($act); ?>">
	        <input type="hidden" name="attr_id" value="<?php echo ($goodsAttribute['attr_id']); ?>">
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
			attr_name:{
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
				url: "/index.php/Admin/Goods/goodsAttributeHandle" ,
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
uploadOne('/index.php/Admin/Uploadify/webupload','#image');

/** 以下是编辑时默认选中某个商品分类*/
$(document).ready(function(){
	<?php if($level_cat['2'] > 0): ?>// 如果当前是二级分类就让一级父id默认选中
		 $("#parent_id_1").val('<?php echo ($level_cat[1]); ?>'); 
		 get_category('<?php echo ($level_cat[1]); ?>','parent_id_2','0');<?php endif; ?>	 
	<?php if($level_cat['3'] > 0): ?>// 如果当前是三级分类就一级和二级父id默认 都选中
		 $("#parent_id_1").val('<?php echo ($level_cat[1]); ?>');		 	
		 get_category('<?php echo ($level_cat[1]); ?>','parent_id_2','<?php echo ($level_cat[2]); ?>');<?php endif; ?>	
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>