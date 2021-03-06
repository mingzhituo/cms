<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html>
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
	<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 留言管理 <span class="c-gray en">&gt;</span> 留言列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
	<div class="page-container">
		<!--datadel('<?php echo U('Article/messageHandle',array('id'=>15,'id'=>17));?>') 

		publicHandleAll('del')
		href="javascript:;" onclick=

		 -->
		<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" class="btn btn-danger radius" id="discard"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
		<script type="text/javascript">
			
			 
	function datadel(del_url)
	                    {
	                        if(confirm("确定要删除吗?"))
	                            location.href = del_url;
	                    } 
		</script>
		<table class="table table-border table-bordered table-bg">
			<thead>
				<tr>
					<th scope="col" colspan="9">留言列表</th>
				</tr>
				<tr class="text-c">
					<th width="25"><input type="checkbox" class="all" name="" value="" onclick="checkAllSign(this)"></th>
					<th width="40">留言ID</th>
					<th width="150">姓名</th>
					
					<th width="100">邮箱</th>
					<th width="100">网址</th>
					<th width="100">留言时间</th>
					<th width="100">手机</th>
					<th width="29">是否通过审核</th>
					<th width="300">内容</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($list)): foreach($list as $key=>$value): ?><tr class="text-c">
					<td><input type="checkbox" value="<?php echo ($value['id']); ?>" id="btn"  name="delete"></td>
					<!-- <td><?php echo $key+$num; ?></td> -->
					<td><?php echo ($value['id']); ?></td>
					<td><?php echo ($value['name']); ?></td>

				


					<td><?php echo ($value['email']); ?></td>
					<td><?php echo ($value['www']); ?></td>
					<td><?php echo (date("Y年-m月-d日 h:i",$value['time'])); ?></td>
					<td><?php echo ($value['phone']); ?></td>
				  <td class="va-m">
						<img width="20" height="20" src="/Public/images/<?php if($value[type] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('cus_msg','id','<?php echo ($value["id"]); ?>','type',this)"/>	                     
	                </td>
					<td class="td-status"><?php echo (mb_substr($value['message'],0,20,'utf-8')); ?>...</td>
					<td><a title="查看" href="javascript:;" onclick="admin_edit('查看详情','<?php echo U("Admin/Article/message/id/".$value['id']);?>','1','800','500')" class="ml-5" style="text-decoration:none;"><i class="Hui-iconfont btn btn-info radius" style="background-color: rgb(49, 176, 213);color:white;border-color: #269abc;">&#xe725;</i></a>
					<a title="删除" href="javascript:;" onclick="admin_del('<?php echo U("Admin/Article/messageHandle/id/".$value['id']);?>',this,<?php echo ($value['id']); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-danger radius">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; ?>
			</tbody>
		</table>
		   <div class="row">
	        <!--         <div class="col-sm-6 text-left"></div> -->
	                <div class="col-sm-12 text-center"><div class='dataTables_paginate paging_simple_numbers'>
	                	<ul class='pagination'><?php echo ($page); ?></ul>
	                </div><!-- </div>    -->   
	            </div> 
	<!-- 	<div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
			<div class='dataTables_paginate paging_simple_numbers' id='DataTables_Table_0_paginate'>
				<div class='dataTables_paginate paging_simple_numbers'><ul class='pagination'><?php echo ($page); ?></ul></div>
			</div>
		</div> -->
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
	<script type="text/javascript" src="/Public/js/myAjax.js"></script>
	<script type="text/javascript">
	/* 批量删除 */
	  // 全选
	  $('.all').click(function() {
	  	//alert('11');die;
	    if($(this).is(':checked')) {
	      $(':checkbox').attr('checked', 'checked');
	    } else {
	      $(':checkbox').removeAttr('checked');
	    }
	  });
	 
	  // 删除操作
	  $('#discard').click(function() {
	  	 var cks=document.getElementsByName("delete");
	  	 //console.log(cks);
	  		var str="";
	  		 //拼接所有的id
	            for(var i=0;i<cks.length;i++){
	                if(cks[i].checked){
	                    str+=cks[i].value+",";
	                }
	            }
	            //去掉末尾的&
	            str=str.substring(0, str.length-1);

	        //console.log(str);  

	  	//alert($(':checked').size());
	    if($(':checked').size() > 0) {
	      layer.confirm('确定要删除吗？', {
	        btn: ['确定','取消'], //按钮
	        shade: false //不显示遮罩
	      }, function(){

	      	//console.log($.post);  {data: $('form').serializeArray()}
	        $.post(
	        	"<?php echo U('Article/discard');?>",
	/*         type: "POST",
	         dataType: "json",*/
	           {str:str},
	           function(result) {
	           	
	          if(result.state == 1) {
	            layer.msg(result.message, {icon: 1, time: 1000});
	          } else {
	            layer.msg(res.message, {icon: 2, time: 1000});
	          }
	          setTimeout(function() {
	            location.reload();
	          }, 1000);
	        });
	      }, function(){
	        layer.msg('取消了删除！', {time: 1000});
	      });
	    } else {
	      layer.alert('没有选择！');
	    }
	  });
		 /**
	     * 全选
	     * @param obj
	     */
	    function checkAllSign(obj){
	        $(obj).toggleClass('trSelected');
	        if($(obj).hasClass('trSelected')){
	            $('#flexigrid > table>tbody >tr').addClass('trSelected');
	        }else{
	            $('#flexigrid > table>tbody >tr').removeClass('trSelected');
	        }
	    }
	    /**
	     * 批量公共操作（删，改）
	     * @returns {boolean}
	     */
	/*    function publicHandleAll(type){
	        var ids = '';
	        $('#flexigrid .trSelected').each(function(i,o){
	            // console.log(o);
	           // ids.push($(o).data('id'));
	            ids += $(o).data('id')+',';
	        });
	         console.log(ids);
	        if(ids == ''){

	            layer.msg('至少选择一项', {icon: 2, time: 2000});
	            return false;

	        }

	        publicHandle(ids,type); //调用删除函数
	    }*/
	    /**
	     * 公共操作（删，改）
	     * @param type
	     * @returns {boolean}
	     */
	    function publicHandle(ids,handle_type){
	        layer.confirm('确认当前操作？', {
	                    btn: ['确定', '取消'] //按钮
	                }, function () {
	                    // 确定
	                    $.ajax({
	                        url: $('#flexigrid').data('url'),
	                        type:'post',
	                        data:{ids:ids,type:handle_type},
	                        dataType:'JSON',
	                        success: function (data) {
	                            layer.closeAll();
	                            if (data.status == 1){
	                                layer.msg(data.msg, {icon: 1, time: 2000},function(){
	                                    location.href = data.url;
	                                });
	                            }else{
	                                layer.msg(data.msg, {icon: 2, time: 2000});
	                            }
	                        }
	                    });
	                }, function (index) {
	                    layer.close(index);
	                }
	        );
	    }
	/*
		参数解释：
		title	标题
		url		请求的url
		id		需要操作的数据id
		w		弹出层宽度（缺省调默认值）
		h		弹出层高度（缺省调默认值）
	*/
	/*管理员-增加*/
	function admin_add(title,url,w,h){
		layer_show(title,url,w,h);
	}
	/*管理员-删除*/
	function admin_del(url,obj,id){
		layer.confirm('确认要删除吗？',function(index){
			$.ajax({
				type: 'GET',
				url:url,
				dataType: 'json',
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
	/*管理员-停用*/
	function admin_stop(obj,id){
		layer.confirm('确认要停用吗？',function(index){
			//此处请求后台程序，下方是成功后的前台处理……
			$.ajax({
				type: 'post',
				url:'<?php echo U("Admin/Handle/position");?>',
				dataType: 'json',
				data:{act:'edit',id:id,is_open:0},
				success: function(data){
					if (data.status==1) {
						layer.msg('已停用',{icon:1,time:0});
						window.location.reload(true);;
					}else{
						layer.msg('操作失败',{icon:2,time:1000});exit;
					}
				},
	            error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('网络故障，请联系管理员!',{icon:0,time:1000});
				}
			});	
		});
	}

	/*管理员-启用*/
	function admin_start(obj,id){
		layer.confirm('确认要启用吗？',function(index){
			//此处请求后台程序，下方是成功后的前台处理……
			$.ajax({
				type: 'post',
				url:'<?php echo U("Admin/Handle/position");?>',
				dataType: 'json',
				data:{act:'edit',id:id,is_open:1},
				success: function(data){
					if (data.status==1) {
						layer.msg('已启用',{icon:1,time:0});
						window.location.reload(true);;
					}else{
						layer.msg('操作失败',{icon:2,time:1000});exit;
					}
				},
	            error: function(XmlHttpRequest, textStatus, errorThrown){
					layer.msg('网络故障，请联系管理员!',{icon:0,time:1000});
				}
			});
		});
	}
	function selecttime(flag){
	    if(flag==1){
	        var endTime = $("#countTimeend").val();
	        if(endTime != ""){
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',maxDate:endTime})}else{
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
	    }else{
	        var startTime = $("#countTimestart").val();
	        if(startTime != ""){
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm',minDate:startTime})}else{
	            WdatePicker({dateFmt:'yyyy-MM-dd HH:mm'})}
	    }
	 }
	</script>
	</body>
	</html>