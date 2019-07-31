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
<title>添加图片</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>图片名：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['ad_name']); ?>" placeholder="" id="ad_name" name="ad_name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">图片类型：</label>
		<div class="formControls col-xs-8 col-sm-9"> 
			<span class="select-box" style="width:150px;">
				<select class="select" name="media_type" size="1">
	                 <option value="0" >图片</option>                                             
	                 <option value="1">flash</option>

				</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">图片位置：</label>
		<div class="formControls col-xs-8 col-sm-9"> 
			<span class="select-box" style="width:50%">
				<select class="select" name="pid" size="1">
					<?php if(is_array($position)): foreach($position as $key=>$vo): ?><option value="<?php echo ($vo["position_id"]); ?>" <?php if($result['pid'] == $vo['position_id']): ?>selected<?php endif; ?>><?php echo ($vo["position_name"]); ?></option><?php endforeach; endif; ?>
				</select>
			</span> 
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>水印开关：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<button type="button" onclick="on_off(this)" value="<?php echo ($water); ?>">
			<?php if($water == 0): ?>关闭
			<?php else: ?>
				开启<?php endif; ?>
			</button>
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>图片来源：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['author']); ?>" placeholder="" id="author" name="author">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>鼠标悬停标题：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['ad_title']); ?>" placeholder="" id="ad_title" name="ad_title">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>浏览量：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['click']); ?>" placeholder="" id="click" name="click">
		</div>
	</div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">开始时间: </label>
        <div class="formControls col-xs-8 col-sm-3">
            <input type="text" class="input-text" value="<?php echo (date('Y-m-d',$result["start_time"])); ?>" placeholder="" id="begin" name="begin" onfocus="selecttime(1)">
        </div>
    </div>
    <div class="row cl">
        <label class="form-label col-xs-4 col-sm-3">结束时间: </label>
        <div class="formControls col-xs-8 col-sm-3">
            <input type="text" class="input-text" value="<?php echo ($result["end"]); ?>" placeholder="" id="end" name="end" onfocus="selecttime(2)">
        </div>
    </div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">图片：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<div class="uploader-thum-container">
			<div id="fileList" class="uploader-list">
				<img style="width:192px" src="<?php echo ($result["ad_code"]); ?>" alt="">
				<div class="info"></div>
				<p class="state"></p>
			</div>
			<div id="filePicker">选择图片</div>
			<span id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</span>
		</div>
		<input type="hidden" name="ad_code" id="ad_code" value="<?php echo ($result["ad_code"]); ?>">
	</div>			
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">图片链接：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['ad_link']); ?>" name="ad_link">
		</div>
	</div>      			
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">排序：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ((isset($result['orderby']) && ($result['orderby'] !== ""))?($result['orderby']):'50'); ?>" placeholder="50" id="orderby" name="orderby">
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
	        <input type="hidden" name="act" value="<?php echo ($act); ?>">
	        <input type="hidden" name="ad_id" value="<?php echo ($result['ad_id']); ?>">
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
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/jquery.validation/1.14.0/messages_zh.js"></script> 
<script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/Public/webuploader/upload.js"></script>
<script type="text/javascript" src="/Public/js/myAjax.js"></script>
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
				url: "/index.php/Admin/Ad/adHandle" ,
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
uploadOne('/index.php/Admin/Uploadify/webupload','#ad_code');

function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd'})}
    }
 }
function on_off (o) {
	var v = $(o).val();
	if (v==1) {
		var c = 0;
		$.ajax({
				url:"/index.php?m=Admin&c=Index&a=changeTableVal&table=config&id_name=id&id_value=1&field=value&value="+c,			
				success: function(data){									
					$(o).val(c);
					$(o).text('关闭');            
				}
		});
	}else{
		var c = 1;
		$.ajax({
				url:"/index.php?m=Admin&c=Index&a=changeTableVal&table=config&id_name=id&id_value=1&field=value&value="+c,			
				success: function(data){									
					$(o).val(c); 
					$(o).text('开启');          
				}
		});
	};
}
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>