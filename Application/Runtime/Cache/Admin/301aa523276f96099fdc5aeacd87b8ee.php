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
<title>添加分类</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>分类名称：</label>
		<div class="formControls col-xs-8 col-sm-5">
        	<input type="hidden" name="id" value="<?php echo ($goods_category_info["id"]); ?>">
			<input type="text" class="input-text" value="<?php echo ($goods_category_info["name"]); ?>" placeholder="分类名称" id="name" name="name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>英文名（别名）：</label>
		<div class="formControls col-xs-8 col-sm-5">
			<input type="text" class="input-text" value="<?php echo ($goods_category_info["en_name"]); ?>" placeholder="英文名（别名）" id="en_name" name="en_name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>上级分类:</label>
		<div class="formControls col-xs-8 col-sm-9"> 
			<span class="select-box" style="width:150px;">
				<select class="select"  name="parent_id_1" id="parent_id_1" size="1"  onchange="get_category(this.value,'parent_id_2','0');">
	                <option value="0">顶级分类</option>
	                <?php if(is_array($cat_list)): foreach($cat_list as $key=>$v): ?><option value="<?php echo ($v[id]); ?>"><?php echo ($v[name]); ?></option><?php endforeach; endif; ?> 
				</select>
			</span> 
			<span class="select-box" style="width:150px;">
				<select class="select"  name="parent_id_2" id="parent_id_2" size="1">
	                <option value="0">请选择商品分类</option>  
				</select>
			</span> 		
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>导航显示：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<?php if(($goods_category_info[is_show] == 1) or ($goods_category_info[is_show] == NULL)): ?><div class="radio-box">
				<input type="radio" id="show_in_nav" name="show_in_nav" value="1" checked="checked">
				<label for="show_in_nav">是</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="show_in_nav" name="show_in_nav" value="0">
				<label for="show_in_nav">否</label>
			</div>
			<?php else: ?>
			<div class="radio-box">
				<input type="radio" id="show_in_nav" name="show_in_nav" value="1">
				<label for="show_in_nav">是</label>
			</div>
			<div class="radio-box">
				<input type="radio" id="show_in_nav" name="show_in_nav" value="0" checked="checked">
				<label for="show_in_nav">否</label>
			</div><?php endif; ?>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>所属分组：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<div class="">
				<span class="select-box" style="width:150px;">
					<select  class="select" name="cat_group" id="cat_group">
	                    <option value="0">0</option>                                        
	                    <option value='1' <?php if($goods_category_info[cat_group] == 1): ?>selected='selected'<?php endif; ?>>1</option>"
	                    <option value='2' <?php if($goods_category_info[cat_group] == 2): ?>selected='selected'<?php endif; ?>>2</option>"
	                    <option value='3' <?php if($goods_category_info[cat_group] == 3): ?>selected='selected'<?php endif; ?>>3</option>"
	                    <option value='4' <?php if($goods_category_info[cat_group] == 4): ?>selected='selected'<?php endif; ?>>4</option>"
	                    <option value='5' <?php if($goods_category_info[cat_group] == 5): ?>selected='selected'<?php endif; ?>>5</option>"
	                    <option value='6' <?php if($goods_category_info[cat_group] == 6): ?>selected='selected'<?php endif; ?>>6</option>"
	                    <option value='7' <?php if($goods_category_info[cat_group] == 7): ?>selected='selected'<?php endif; ?>>7</option>"
	                    <option value='8' <?php if($goods_category_info[cat_group] == 8): ?>selected='selected'<?php endif; ?>>8</option>"
	                    <option value='9' <?php if($goods_category_info[cat_group] == 9): ?>selected='selected'<?php endif; ?>>9</option>"
	                    <option value='10' <?php if($goods_category_info[cat_group] == 10): ?>selected='selected'<?php endif; ?>>10</option>"
	                    <option value='11' <?php if($goods_category_info[cat_group] == 11): ?>selected='selected'<?php endif; ?>>11</option>"
	                    <option value='12' <?php if($goods_category_info[cat_group] == 12): ?>selected='selected'<?php endif; ?>>12</option>"
	                    <option value='13' <?php if($goods_category_info[cat_group] == 13): ?>selected='selected'<?php endif; ?>>13</option>"
	                    <option value='14' <?php if($goods_category_info[cat_group] == 14): ?>selected='selected'<?php endif; ?>>14</option>"
	                    <option value='15' <?php if($goods_category_info[cat_group] == 15): ?>selected='selected'<?php endif; ?>>15</option>"
	                    <option value='16' <?php if($goods_category_info[cat_group] == 16): ?>selected='selected'<?php endif; ?>>16</option>"
	                    <option value='17' <?php if($goods_category_info[cat_group] == 17): ?>selected='selected'<?php endif; ?>>17</option>"
	                    <option value='18' <?php if($goods_category_info[cat_group] == 18): ?>selected='selected'<?php endif; ?>>18</option>"
	                    <option value='19' <?php if($goods_category_info[cat_group] == 19): ?>selected='selected'<?php endif; ?>>19</option>"
	                    <option value='20' <?php if($goods_category_info[cat_group] == 20): ?>selected='selected'<?php endif; ?>>20</option>"
					</select>
				</span>
			</div>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>缩略图：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<div class="uploader-thum-container">
			<div id="fileList" class="uploader-list">
				<img src="<?php echo ($goods_category_info["image"]); ?>" alt="">
				<div class="info"></div>
				<p class="state"></p>
			</div>
			<div id="filePicker">选择图片</div>
			<span id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</span>
			</div>
			<input type="hidden" name="image" id="image" value="<?php echo ($goods_category_info["image"]); ?>">
		</div>		
	</div>	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>显示排序：</label>
		<div class="formControls col-xs-8 col-sm-5">
			<input type="text" class="input-text" value="<?php echo ((isset($goods_category_info["sort_order"]) && ($goods_category_info["sort_order"] !== ""))?($goods_category_info["sort_order"]):'50'); ?>" placeholder="50" id="sort_order" name="sort_order">
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
	        <input type="hidden" name="act" value="<?php echo ($act); ?>">
	        <input type="hidden" name="id" value="<?php echo ($goods_category_info['id']); ?>">
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
			name:{
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
				url: "/index.php/Admin/Goods/categoryHandle" ,
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