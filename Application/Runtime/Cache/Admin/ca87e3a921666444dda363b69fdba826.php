<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>管理后台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/Public/Admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
 	<link href="/Public/Admin/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 --
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/Public/Admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
    	folder instead of downloading all of them to reduce the load. -->
    <link href="/Public/Admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link rel="stylesheet" type="text/css" href="/Public/webuploader/0.1.5/webuploader.css">
    <link href="/Public/Admin/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />   
    <!-- jQuery 2.1.4 -->
    <script src="/Public/Admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="/Public/js/global.js"></script>  
    <script src="/Public/Admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Public/Admin/lib/layer/2.4/layer.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
    <script src="/Public/js/myAjax.js"></script>
    <script type="text/javascript" src="/Public/js/myFormValidate.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
   						layer.closeAll();
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    //全选
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['90%', '90%'],
            content: $(obj).attr('data-url'), 
        });
    }
    
    function delAll(obj,name){
    	var a = [];
    	$('input[name*='+name+']').each(function(i,o){
    		if($(o).is(':checked')){
    			a.push($(o).val());
    		}
    	})
    	if(a.length == 0){
    		layer.alert('请选择删除项', {icon: 2});
    		return;
    	}
    	layer.confirm('确认删除？', {btn: ['确定','取消'] }, function(){
    			$.ajax({
    				type : 'get',
    				url : $(obj).attr('data-url'),
    				data : {act:'del',del_id:a},
    				dataType : 'json',
    				success : function(data){
    					if(data == 1){
    						layer.msg('操作成功', {icon: 1});
    						$('input[name*='+name+']').each(function(i,o){
    							if($(o).is(':checked')){
    								$(o).parent().parent().remove();
    							}
    						})
    					}else{
    						layer.msg(data, {icon: 2,time: 2000});
    					}
    					layer.closeAll();
    				}
    			})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);	
    }
    </script>        
  </head>
  <body style="background-color:#ecf0f5;">
 


<link href="/Public/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
<script src="/Public/plugins/daterangepicker/moment.min.js" type="text/javascript"></script>
<script src="/Public/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/Public/webuploader/0.1.5/webuploader.css">

<div class="wrapper">
    
    <section class="content" style="padding:0px 15px;">
        <!-- Main content -->
        <div class="container-fluid">
            <div class="pull-right">
                <a href="javascript:history.go(-1)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="返回"><i class="fa fa-reply"></i></a>
            </div>
            <div class="panel panel-default">           
                <div class="panel-body ">   
                   	<ul class="nav nav-tabs">
                        <?php if(is_array($group_list)): foreach($group_list as $k=>$vo): ?><li <?php if($k == 'shop_info'): ?>class="active"<?php endif; ?>><a href="javascript:void(0)" data-url="<?php echo U('System/index',array('inc_type'=>$k));?>" data-toggle="tab" onclick="goset(this)"><?php echo ($vo); ?></a></li><?php endforeach; endif; ?>                           
                    </ul>
                    <!--表单数据-->
                    <form method="post" id="handlepost" action="<?php echo U('System/handle');?>">                    
                        <!--通用信息-->
                    <div class="tab-content" style="padding:20px 0px;">                 	  
                        <div class="tab-pane active" id="tab_tongyong">                           
                            <table class="table table-bordered">
                                <tbody>     
                                <tr>
                                    <td class="col-sm-2">网站备案号：</td>
                                    <td class="col-sm-8">
                                        <input type="text" class="form-control" name="record_no" value="<?php echo ($config["record_no"]); ?>" >
                                        <span id="err_attr_name" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-2">网站名称：</td>
                                    <td class="col-sm-8">
                                        <input type="text" class="form-control" name="store_name" value="<?php echo ($config["store_name"]); ?>" >
                                        <span id="err_attr_name" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                </tr> 
                                <tr>
                                    <td class="col-sm-2">网址：</td>
                                    <td class="col-sm-8">
                                        <input type="text" class="form-control" name="store_url" value="<?php echo ($config["store_url"]); ?>" >
                                        <span id="err_attr_name" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-sm-2">公司名称：</td>
                                    <td class="col-sm-8">
                                        <input type="text" class="form-control" name="company_name" value="<?php echo ($config["company_name"]); ?>" >
                                        <span id="err_attr_name" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                </tr>                                
                                <tr>
                                    <td>网站logo：</td>
                                    <td>
                                    <div class="formControls col-xs-8 col-sm-9">
                                        <div class="uploader-thum-container">
                                          <div id="fileList" class="uploader-list">
                                            <img src="<?php echo ($config["store_logo"]); ?>" alt="" style="height:90px;">
                                            <div class="info"></div>
                                            <p class="state"></p>
                                          </div>
                                          <div id="fileList" class="uploader-list"></div>
                                          <div id="filePicker">选择图片</div>
                                          <span id="btn-star" class="btn btn-default btn-uploadstar radius ml-10" style="padding:4px 11px;">开始上传</span>
                                        </div>
                                        <input id="store_logo" type="hidden" name="store_logo" value="<?php echo ($config["store_logo"]); ?>">                                
                                    </div>
                                    </td>
                                </tr>   
                                <tr>
                                    <td>网站标题：</td>
                                    <td >
                                        <input type="text" class="form-control" name="store_title" value="<?php echo ($config["store_title"]); ?>" >
                                        <span id="err_type_id" style="color:#F00; display:none;"></span>                                        
                                    </td>
                                </tr>  
                                <tr>
                                    <td>网站描述：</td>
                                    <td>
                                        <input type="text" class="form-control" name="store_desc" value="<?php echo ($config["store_desc"]); ?>" >
                                    </td>
                                </tr>  
                                <tr>
                                    <td>网站关键字：</td>
                                    <td>
                                        <input type="text" class="form-control" name="store_keyword" value="<?php echo ($config["store_keyword"]); ?>" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>网站版权：</td>
                                    <td>
                                        <input type="text" class="form-control" name="copyright" value="<?php echo ($config["copyright"]); ?>" >
                                    </td>
                                </tr> 
                                <tr>
                                <td>联系人：</td>
                                 <td>
                                     <input type="text" class="form-control" name="contact" value="<?php echo ($config["contact"]); ?>" >
                                 </td>
                                </tr> 
                                <tr>
                                <td>联系电话：</td>
                                  <td>
                                        <input type="text" class="form-control" name="phone" value="<?php echo ($config["phone"]); ?>" >
                                  </td>
                                </tr>
                                <td>联系邮箱：</td>
                                  <td>
                                        <input type="text" class="form-control" name="email" value="<?php echo ($config["email"]); ?>" >
                                  </td>
                                </tr> 
                               <tr>
                                <td>联系手机：</td>
                                  <td>
                                        <input type="text" class="form-control" name="mobile" value="<?php echo ($config["mobile"]); ?>" >
                                  </td>
                                </tr> 
                               <tr>
                                	<td>联系地址：</td>
                                	<td colspan="2">
                                	   <div class="col-xs-2">
                                        <select onchange="get_city(this)" id="province" name="province" class="form-control" style="margin-left:-15px;">
                                            <option  value="0">选择省份</option>
                                            <?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($config[province] == $vo[id]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        </div>   
                                        <div class="col-xs-2">                                        
                                        <select onchange="get_area(this)" id="city" name="city" class="form-control">
                                            <option value="0">选择城市</option>
                                            <?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($config[city] == $vo[id]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        </div>   
                                        <div class="col-xs-2">                                        
                                        <select id="district" name="district" class="form-control">
                                            <option value="0">选择区域</option>
                                            <?php if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($config[district] == $vo[id]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        </div> 
                                        <div class="col-xs-4">
                                        	<input type="text" placeholder="详细地址" class="form-control" name="address" value="<?php echo ($config["address"]); ?>">
                                        </div>      
                                	</td>
                                </tr>
                                <tr>
                                <td>客服QQ1：</td>
                                 <td>
                                        <input type="text" class="form-control" name="qq" value="<?php echo ($config["qq"]); ?>" >
                                 </td>
                                </tr>
                                <tr>
                                <td>客服QQ2：</td>
                                 <td>
                                        <input type="text" class="form-control" name="qq2" value="<?php echo ($config["qq2"]); ?>" >
                                 </td>
                                </tr>
                                <tr>
                                <td>客服QQ3：</td>
                                 <td>
                                        <input type="text" class="form-control" name="qq3" value="<?php echo ($config["qq3"]); ?>" >
                                 </td>
                                </tr>
                                </tbody> 
                                <tfoot>
                                	<tr>
                                	<td><input type="hidden" name="inc_type" value="<?php echo ($inc_type); ?>"></td>
                                	<td class="text-right"><input class="btn btn-primary" type="button" onclick="adsubmit()" value="保存"></td></tr>
                                </tfoot>                               
                                </table>
                        </div>                           
                    </div>              
			    	</form><!--表单数据-->
                </div>
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/Public/webuploader/upload.js"></script>
<script>
function adsubmit(){
	/*
	var site_url = $('input[name="site_url"]').val();	
	var urlReg = /^(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\w \.-]*)*$/;  
	if(!urlReg.exec(site_url))
	{
	   alert('网站域名格式必须是 http://www.xxx.com');	
	   return false;
	}
	*/		
	$('#handlepost').submit();
}

$(document).ready(function(){
	//get_province();
});

function goset(obj){
	window.location.href = $(obj).attr('data-url');
}
uploadOne('/index.php/Admin/Uploadify/webupload','#store_logo');
</script>
</body>
</html>