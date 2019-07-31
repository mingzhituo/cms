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
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>文章标题：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($info["title"]); ?>" placeholder="文章标题" id="title" name="title">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>文章类别：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
				   <select name="cat_id" id="cat_id" class="select">
				   	<?php if($act == add): ?><option value="0">==查看所有1==</option>
                            <?php if(is_array($cat_select)): foreach($cat_select as $key=>$vo): ?><option value="<?php echo ($vo["cat_id"]); ?>" <?php if($vo['parent_id'] == 0): ?>disabled<?php endif; ?> <?php if($vo['cat_id'] == $catid): ?>selected<?php endif; ?>> <?php if($vo['level'] != 0): ?>|<?php endif; echo str_repeat('-', $vo['level']*4); echo ($vo["cat_name"]); ?></option><?php endforeach; endif; ?> 
                    <?php else: ?>	

                    		 <option value="0">==查看所有2==</option>
                            <?php if(is_array($cat_select)): foreach($cat_select as $key=>$vo): ?><option value="<?php echo ($vo["cat_id"]); ?>" <?php if($vo['parent_id'] == 0): ?>disabled<?php endif; ?> <?php if($vo['cat_id'] == $info['cat_id']): ?>selected<?php endif; ?>> <?php if($vo['level'] != 0): ?>|<?php endif; echo str_repeat('-', $vo['level']*4); echo ($vo["cat_name"]); ?></option><?php endforeach; endif; endif; ?>
                        </select>
			<!-- 	<select name="cat_id" id="cat_id">
    				<?php echo ($cat_select); ?>
			</select> -->
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>文章来源：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($info["author"]); ?>" placeholder="文章来源" id="author" name="author">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>缩略图：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<div class="uploader-thum-container">
			<div id="fileList" class="uploader-list">
				<img src="<?php echo ($info["thumb"]); ?>" style="width:200px;height:100px;" alt="">
				<div class="info"></div>
				<p class="state"></p>
			</div>
			<div id="filePicker">选择图片</div>
			<span id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</span>
			</div>
			<input type="hidden" name="thumb" id="thumb" value="<?php echo ($info["thumb"]); ?>">
		</div>		
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>seo关键字：</label>
		<div class="formControls col-xs-8 col-sm-9 skin-minimal">
			<input type="text" class="input-text"  id="keywords" name="keywords" value="<?php echo ($info["keywords"]); ?>">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>点击量：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($info["click"]); ?>" placeholder="点击量" id="click" name="click">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red"></span>外部链接：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo ($info["link"]); ?>" placeholder="" id="sort_order" name="link">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>发布时间：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<input type="text" class="input-text" value="<?php echo (date("Y-m-d H:i:s",$info["publish_time"])); ?>" name="publish_time" id="publish_time" onfocus="selecttime()">
		</div>
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">是否显示：</label>
		<div class="radio-box">
				<input type="radio" id="sex-2" name="is_open" value="0"<?php if($info[is_open] == 0): ?>checked="checked"<?php endif; ?>>
				<label for="sex-2">否</label>
			</div>	
			<div class="radio-box">
				<input name="is_open" type="radio" id="sex-1" value="1" checked="checked"<?php if($info[is_open] != 0): ?>checked="checked"<?php endif; ?>>
				<label for="sex-1">是</label>
			</div>
				
			

		
			
			
	</div>
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">网页描述：</label>
		<div class="formControls col-xs-8 col-sm-9">
		<textarea name="description" id="" cols="30" rows="10" class="textarea"  placeholder="说点什么...100个字符以内" dragonfly="true" onKeyUp="$.Huitextarealength(this,100)"><?php echo ($info["description"]); ?></textarea>
		</div>
	</div>	
	<div class="row cl">
		<label class="form-label col-xs-4 col-sm-3">文章内容：</label>
		<div class="formControls col-xs-8 col-sm-9">
			<!-- <textarea name="content" id="editor" cols="30" rows="10" style="width:100%;height:400px;"><?php echo ($info["content"]); ?></textarea> -->
			<script id="editor" name="content" type="text/plain" style="width:100%;height:400px;"><?php echo (htmlspecialchars_decode($info["content"])); ?></script>
		</div>
	</div>	
	<div class="row cl">
		<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
    		<input type="hidden" name="act" value="<?php echo ($act); ?>">
      	 	<input type="hidden" name="article_id" value="<?php echo ($info["article_id"]); ?>">
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
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/ueditor.all.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/Public/webuploader/upload.js"></script>
<script type="text/javascript">
function selecttime(flag){
    if(flag==1){
        var endTime = $("#countTimeend").val();
        if(endTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',maxDate:endTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})}
    }else{
        var startTime = $("#countTimestart").val();
        if(startTime != ""){
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss',minDate:startTime})}else{
            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})}
    }
 }
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
				url: "/index.php/Admin/Article/aticleHandle" ,
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
$(function(){
	var ue = UE.getEditor('editor');
});
uploadOne('/index.php/Admin/uploadify/webupload','#thumb');
</script> 
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>