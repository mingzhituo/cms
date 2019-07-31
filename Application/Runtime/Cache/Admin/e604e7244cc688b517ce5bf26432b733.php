<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="/favicon.ico" >
<link rel="Shortcut Icon" href="/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5shiv.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/Public/Admin/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>角色添加</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
<meta name="description" content="H-ui.admin v3.0，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<article class="page-container">
	<form action="" method="post" class="form form-horizontal" id="form-admin-role-add">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3"><span class="c-red">*</span>角色名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["role_name"]); ?>" placeholder="" id="roleName" name="role_name">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">角色描述：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($detail["role_desc"]); ?>" placeholder="" id="" name="role_desc">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-3">网站角色：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<dl class="permission-list2">
					<dt>
						<label>
							权限分配
							<input  type="checkbox" name="user-Character-0" id="user-Character-0" onclick="choosebox(this)">
							全选</label>
					</dt>
				</dl>			
				<dl class="permission-list">
					<?php if(is_array($modules)): foreach($modules as $kk=>$menu): ?><dt>
						<label>
							<input type="checkbox" value="" name="user-Character-0" id="user-Character-0" cka="mod-<?php echo ($kk); ?>">
							<?php echo ($group[$kk]); ?></label>
					</dt>
					<dd>
						<dl class="cl permission-list2">
							<dd style="margin-left:0px;">
								<?php if(is_array($menu)): foreach($menu as $key=>$vv): ?><label class="">
									<input type="checkbox" value="<?php echo ($vv["id"]); ?>" name="right[]" id="user-Character-0-0-0" <?php if($vv["enable"] == 1): ?>checked<?php endif; ?> ck="mod-<?php echo ($kk); ?>">
									<?php echo ($vv["name"]); ?></label><?php endforeach; endif; ?>
							</dd>
						</dl>
					</dd><?php endforeach; endif; ?>
				</dl>
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
				<input type="hidden" name="act" value="<?php echo ($act); ?>" />
				<input type="hidden" name="role_id" value="<?php echo ($detail["role_id"]); ?>" />
				<button type="submit" class="btn btn-success radius" id="admin-role-save" name="admin-role-save"><i class="icon-ok"></i> 确定</button>
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

	
	$("#form-admin-role-add").validate({
		rules:{
			role_name:{
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
				dataType : 'json',
				url: "/index.php/Admin/admin/roleHandle" ,
				success: function(data){
					if (data.status == 1) {
						layer.msg(data.msg,{icon:1,time:1000});
						// parent.layer.close(index);
						parent.location.reload(true);
						setTimeout(function(){parent.layer.close(index);},1500);
					}else{
						layer.msg(data.msg,{icon:2,time:1000});
					}
				},
                error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('error!',{icon:1,time:1000});
				}
			});
		}
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>