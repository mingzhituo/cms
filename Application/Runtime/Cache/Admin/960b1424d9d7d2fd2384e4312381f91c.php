<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<link rel="stylesheet" type="text/css" href="/Public/Admin/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/Public/webuploader/0.1.5/webuploader.css">
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/Public/js/myAjax.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="/Public/Admin/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>活动列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 权限 <span class="c-gray en">&gt;</span> 管理员列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title" style="padding:0px;"><i class="Hui-iconfont">&#xe681;</i> 管理员列表</h3>
        </div>
        <div class="page-container">        
            <div class="navbar navbar-default">
				<form action="<?php echo U('Admin/Admin/adminList');?>" id="search-form2" class="navbar-form form-inline l" method="post" style="width:32%">
					<div class="formControls">
						<span class="select-box" style="width:32%;">
							<input type="text" name="keywords" placeholder="搜索" style="border:0 none;">
						</span>							 				 
						<button type="submit" class="btn btn-primary"><i class="Hui-iconfont">&#xe665;</i> 筛选</button>
					</div>
				</form>             
            	<span class="r mt-10 mr-20"> <a href="javascript:;" onclick="admin_add('添加管理员','<?php echo U("Admin/Admin/admin_info");?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加管理员</a></span> 
            </div>
            <table class="table table-border table-bordered radius table-hover" id="list-table" style="border-collapse:collapse;">
                <thead>
                    <tr class="text-c">
						<th>ID</th>
						<th>登录名</th>
						<th>所属角色</th>
						<th>email地址</th>
						<th>加入时间</th>
						<th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr class="text-c">
                        <td class="va-m"><?php echo ($vo["admin_id"]); ?></td>
                        <td class="va-m"><?php echo ($vo["username"]); ?></td>
                        <td class="va-m"><?php echo ($vo['role']); ?></td>
                        <td class="va-m"><?php echo ($vo["email"]); ?></td>
                        <td class="va-m"><?php echo (date("Y-m-d H:i:s",$vo["addtime"])); ?></td>
                        <td>
                            <a title="编辑" href="javascript:;" onclick="admin_edit('管理员编辑','<?php echo U("Admin/Admin/admin_info/admin_id/".$vo['admin_id']);?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-info radius">&#xe6df;</i></a>
                            <a title="删除" href="javascript:;" onclick="admin_del('<?php echo U("Admin/Admin/adminHandle/");?>',this,<?php echo ($vo['admin_id']); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-danger radius">&#xe6e2;</i></a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-6 text-left"></div>
                <div class="col-sm-6 text-right"><?php echo ($page); ?></div>      
            </div>            
        </div>
    </div>    
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/Public/Admin/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="/Public/Admin/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
/*
    参数解释：
    title   标题
    url     请求的url
    id      需要操作的数据id
    w       弹出层宽度（缺省调默认值）
    h       弹出层高度（缺省调默认值）
*/
/*管理员-增加*/
function admin_add(title,url,w,h){
    layer_show(title,url,w,h);
}
/*管理员-删除*/
function admin_del(url,obj,id){
    layer.confirm('确认要删除吗？',function(index){
        $.ajax({
            type: 'POST',
            url: url,
            dataType: 'json',
            data:{act:'del',admin_id:id},
            success: function(data){
                if (data.status==1) {
                    $(obj).parents("tr").remove();
                    window.location.reload(true);
                    layer.msg('已删除!',{icon:1,time:1000});
                }else{
                    layer.msg(data.msg,{icon:2,time:1000});
                }
            },
            error:function(data) {
                console.log(data.msg);
            },
        });     
    });
}

/*管理员-编辑*/
function admin_edit(title,url,id,w,h){
    layer_show(title,url,w,h);
}

</script>
</body>
</html>