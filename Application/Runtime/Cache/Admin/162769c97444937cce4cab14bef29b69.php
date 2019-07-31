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
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>上传文件</title>
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-admin-add">
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>文件名：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['file_name']); ?>" placeholder="" id="file_name" name="file_name">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">文件图片：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<div class="uploader-thum-container">
			<div id="fileList" class="uploader-list">
				<img style="width:192px" src="<?php echo ($result["file_img"]); ?>" alt="">
				<div class="info"></div>
				<p class="state"></p>
			</div>
			<div id="filePicker">选择图片</div>
			<span id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</span>
		</div>
		<input type="hidden" name="file_img" id="file_img" value="<?php echo ($result["file_img"]); ?>">
	</div>	
	
	<!-- 
				<form action="" enctype="multipart/form-data" method="post" >
			<input type="text" name="name" />
	
			<input type='file'  name='file[]'>
			<input type='file'  name='file[]'>
			<input type="submit" value="提交" >
			</form> -->
		
			<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">文件上传(单个):</label>
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
							<div id="filePicker1">选择文件</div>
							<div class="uploadBtn">开始上传</div>
						</div>
					</div> 
				</div>
			</div>
		</div> 
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>来源：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['author']); ?>" placeholder="" id="author" name="author">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>浏览量：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['click']); ?>" placeholder="" id="click" name="click">
		</div>
	</div>	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2"><span class="c-red"></span>下载量：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($result['down_times']); ?>" placeholder="" id="down_times" name="down_times">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-2">文件描述：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<!-- <textarea name="content" id="editor" cols="30" rows="10" style="width:100%;height:400px;"><?php echo ($info["content"]); ?></textarea> -->
			<script id="editor" name="file_desc" type="text/plain" style="width:100%;height:400px;"><?php echo (htmlspecialchars_decode($info["file_desc"])); ?></script>
		</div>
	</div>
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
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
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/Public/webuploader/upfiles.js"></script>
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
			file_name:{
				required:true,
			},
			password:{
				required:true,
				minlength:6,
				maxlength:18
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
				url: "/index.php/Admin/Files/upfiles" ,
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
uploads('/index.php/Admin/Uploadify/fileupload','file_url[]');
uploadOne('/index.php/Admin/Uploadify/webupload','#file_img');
$(function(){
	var ue = UE.getEditor('editor');
});
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>