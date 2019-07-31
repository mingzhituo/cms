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
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 商品 <span class="c-gray en">&gt;</span> 商品分类列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="col-xs-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title" style="padding:0px;"><i class="Hui-iconfont">&#xe681;</i> 商品分类列表</h3>
        </div>
        <div class="page-container">
            <div class="navbar navbar-default"> <span class="r mt-10 mr-20"> <a href="javascript:;" onclick="admin_add('添加商品分类','<?php echo U("Admin/Goods/category_info");?>','800','500')" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe600;</i> 添加商品分类</a></span> </div>
            <table class="table table-border table-bordered radius table-hover" id="list-table" style="border-collapse:collapse;">
                <thead>
                    <tr class="text-c">
						<th>分类ID</th>
						<th>分类名称</th>
						<th>是否推荐</th>
						<th>是否显示</th>
						<th>分组</th>
						<th>排序</th>
						<th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($cat_list)): foreach($cat_list as $k=>$vo): ?><tr class="<?php echo ($vo["level"]); ?> text-c" id="<?php echo ($vo["level"]); ?>_<?php echo ($vo["id"]); ?>" <?php if($vo[level] > 1): ?>style="display:none"<?php endif; ?>>
                        <td class="va-m"><?php echo ($vo["id"]); ?></td>
                        <td class="va-m" style="text-align:left; width:300px; padding-left:<?php echo ($vo[level] * 5); ?>em">
						<?php if($vo["have_son"] == 1): ?><span class="glyphicon glyphicon-plus btn-warning" style="padding:2px; font-size:12px;"  id="icon_<?php echo ($vo["level"]); ?>_<?php echo ($vo["id"]); ?>" aria-hidden="false" onclick="rowClicked(this)" >
		       				</span>&nbsp;<?php endif; ?>
                            <span><?php echo ($vo["name"]); ?></span>                        
                        </td>
                        <td class="va-m">
                        	<img width="20" height="20" src="/Public/images/<?php if($vo[is_hot] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('goods_category','id','<?php echo ($vo["id"]); ?>','is_hot',this)"/>
                    	</td>
                        <td class="va-m">
                        	<img width="20" height="20" src="/Public/images/<?php if($vo[is_show] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('goods_category','id','<?php echo ($vo["id"]); ?>','is_show',this)"/>
                        </td>
                        <td class="va-m">
							<input type="text" onchange="updateSort('goods_category','id','<?php echo ($vo["id"]); ?>','cat_group',this)"  onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')"  size="4"value="<?php echo ($vo["cat_group"]); ?>" class="input-sm" />                        	
                        </td>
                        <td class="va-m">
							<input type="text" onchange="updateSort('goods_category','id','<?php echo ($vo["id"]); ?>','sort_order',this)"   onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" size="4" value="<?php echo ($vo["sort_order"]); ?>" class="input-sm" />	                     
                        </td>
                        <td>
                            <a title="编辑" href="javascript:;" onclick="admin_edit('商品分类编辑','<?php echo U("Admin/Goods/category_info/id/".$vo['id']);?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-info radius">&#xe6df;</i></a>
                            <a title="删除" href="javascript:;" onclick="admin_del('<?php echo U("Admin/Goods/categoryHandle");?>',this,<?php echo ($vo['id']); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-danger radius">&#xe6e2;</i></a>
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
            data:{act:'del',id:id},
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
// 以下是 bootstrap 自带的  js
function rowClicked(obj)
{
  span = obj;

  obj = obj.parentNode.parentNode;

  var tbl = document.getElementById("list-table");

  var lvl = parseInt(obj.className);

  var fnd = false;
  
  var sub_display = $(span).hasClass('glyphicon-minus') ? 'none' : '' ? 'block' : 'table-row' ;
  //console.log(sub_display);
  if(sub_display == 'none'){
	  $(span).removeClass('glyphicon-minus btn-info');
	  $(span).addClass('glyphicon-plus btn-warning');
  }else{
	  $(span).removeClass('glyphicon-plus btn-info');
	  $(span).addClass('glyphicon-minus btn-warning');
  }

  for (i = 0; i < tbl.rows.length; i++)
  {
      var row = tbl.rows[i];
      
      if (row == obj)
      {
          fnd = true;         
      }
      else
      {
          if (fnd == true)
          {
              var cur = parseInt(row.className);
              var icon = 'icon_' + row.id;
              if (cur > lvl)
              {
                  row.style.display = sub_display;
                  if (sub_display != 'none')
                  {
                      var iconimg = document.getElementById(icon);
                      $(iconimg).removeClass('glyphicon-plus btn-info');
                      $(iconimg).addClass('glyphicon-minus btn-warning');
                  }else{               	    
                      $(iconimg).removeClass('glyphicon-minus btn-info');
                      $(iconimg).addClass('glyphicon-plus btn-warning');
                  }
              }
              else
              {
                  fnd = false;
                  break;
              }
          }
      }
  }

  for (i = 0; i < obj.cells[0].childNodes.length; i++)
  {
      var imgObj = obj.cells[0].childNodes[i];
      if (imgObj.tagName == "IMG")
      {
          if($(imgObj).hasClass('glyphicon-plus btn-info')){
        	  $(imgObj).removeClass('glyphicon-plus btn-info');
        	  $(imgObj).addClass('glyphicon-minus btn-warning');
          }else{
        	  $(imgObj).removeClass('glyphicon-minus btn-warning');
        	  $(imgObj).addClass('glyphicon-plus btn-info');
          }
      }
  }

} 
</script>
</body>
</html>