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

<style>
td{height:40px;line-height:40px; padding-left:20px;}
.span_1{
	float:left;
	margin-left:0px;
	height:130px;
	line-height:130px;
}
.span_1 ul{list-style:none;padding:0px;}
.span_1 ul li{
	border:1px solid #CCC;
	height:40px;
	padding:0px 10px;
	margin-left:-1px;
	margin-top:-1px;
	line-height:40px;
}
</style>
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
                        <?php if(is_array($group_list)): foreach($group_list as $k=>$vo): ?><li <?php if($k == 'water'): ?>class="active"<?php endif; ?>><a href="javascript:void(0)" data-url="<?php echo U('System/index',array('inc_type'=>$k));?>" data-toggle="tab" onclick="goset(this)"><?php echo ($vo); ?></a></li><?php endforeach; endif; ?>                        
                    </ul>
                    <!--表单数据-->
                    <form method="post" id="handlepost" action="<?php echo U('System/handle');?>">                    
                        <!--通用信息-->
                    <div class="tab-content" style="padding:20px 0px;">                 	  
                        <div class="tab-pane active" id="tab_tongyong">                           
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                 <td>图片添加水印开关：</td>
                                    <td>
                                        <button type="button" onclick="on_off(this)" value="<?php echo ($water); ?>">
                                        <?php if($water == 0): ?>关闭
                                        <?php else: ?>
                                            开启<?php endif; ?>
                                        </button>
                                    </td>
                                 </tr>
                                <tr>
                                    <td>水印类型：</td>
                                    <td>
                                        <input type="radio" name="mark_type" value="text" onclick="setwarter('text')" <?php if($config['mark_type'] == 'text'): ?>checked<?php endif; ?>> 文字 
                                        <input type="radio" name="mark_type" value="img" onclick="setwarter('img')" <?php if($config['mark_type'] == 'img'): ?>checked<?php endif; ?>> 图片                                
                                    </td>
                                </tr>
                                <tr id="texttr" style="display:none;">
                                    <td>水印文字：</td>
                                    <td>
         								<input type="text"  style="width:300px;" name="mark_txt" id="mark_txt" value="<?php echo ($config["mark_txt"]); ?>" >                               
                                    </td>
                                </tr>
                                  
                                <tr id="imgtr" style="display:none;">
                                    <td>水印图片：</td>
                                    <td>
                         				<div class="row cl">
                                            <label class="form-label col-xs-4 col-sm-2">上传商品图片:</label>
                                            <div class="formControls col-xs-8 col-sm-9">
                                                <div class="uploader-thum-container">
                                                    <div id="fileList" class="uploader-list">
                                                        <img src="<?php echo ($config["mark_img"]); ?>" alt="" style="width:120px; height:90px;">
                                                        <div class="info"></div>
                                                        <p class="state"></p>
                                                    </div>
                                                    <div id="fileList" class="uploader-list"></div>
                                                    <div id="filePicker">选择图片</div>
                                                    <span id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</span>
                                                </div>
                                                <input id="mark_img" type="hidden" name="mark_img" value="<?php echo ($config["mark_img"]); ?>">                   
                                            </div>
                                        </div>                                        
                                    </td>
                                </tr>                        
                              	<!-- <tr>
                                    <td>水印添加条件：</td>
                                    <td>
                                        <input type="number"  pattern="^\d{1,}$" title="只能输入数字" name="mark_width" value="<?php echo ($config["mark_width"]); ?>" >  图片宽度 单位像素(px)
                                        <br>
                                        <input type="number"  pattern="^\d{1,}$" title="只能输入数字" name="mark_height" value="<?php echo ($config["mark_height"]); ?>">  图片高度 单位像素(px)                               
                                    </td>
                                </tr> -->
                                <tr>
                                    <td>水印透明度：</td>
                                    <td >
                                        <input type="range" style="width:300px;display:inline;" onChange="mark_degree2.value = this.value" value="<?php echo ($config["mark_degree"]); ?>" name="mark_degree"  min="1"   step="2" max="100" />
                                        <output id="mark_degree2" style="display:inline;color:red;"><?php echo ($config["mark_degree"]); ?></output>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0代表完全透明，100代表不透明
                                    </td>
                                </tr> 
                                <tr>
                                    <td>JPEG 水印质量：</td>
                                    <td>                                            
                                        <input type="range" style="width:300px;display:inline;" onChange="mark_quality2.value = this.value" value="<?php echo ($config["mark_quality"]); ?>" name="mark_quality"  min="1"   step="2" max="100" />
                                        <output id="mark_quality2" style="display:inline;color:red;"><?php echo ($config["mark_quality"]); ?></output>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 水印质量请设置为0-100之间的数字,决定 jpg 格式图片的质量                                          
                                    </td>
                                </tr> 
                                <tr>
                                    <td>水印位置：</td>
                                    <td >
                                        <div style="height:124px; background:#fff">
                                                <span class="span_1">
                                                        <ul>
                                                           <li><input type="radio" name="sel" value="1"<?php if($config['sel'] == '1'): ?>checked<?php endif; ?>>&nbsp;顶部居左</li>
                                                           <li><input type="radio" name="sel" value="4" <?php if($config['sel'] == '4'): ?>checked<?php endif; ?>>&nbsp;中部居左</li>
                                                           <li><input type="radio" name="sel" value="7" <?php if($config['sel'] == '7'): ?>checked<?php endif; ?>>&nbsp;底部居左</li>
                                                        </ul>	
                                                </span>	
                                                <span class="span_1">
                                                        <ul>
                                                           <li><input type="radio" name="sel" value="2" <?php if($config['sel'] == '2'): ?>checked<?php endif; ?>>&nbsp;顶部居中</li>
                                                           <li><input type="radio" name="sel" value="5" <?php if($config['sel'] == '5'): ?>checked<?php endif; ?>>&nbsp;中部居中</li>
                                                           <li><input type="radio" name="sel" value="8" <?php if($config['sel'] == '8'): ?>checked<?php endif; ?>>&nbsp;底部居中</li>
                                                        </ul>	
                                                </span>	
                                                <span class="span_1">
                                                        <ul>
                                                           <li><input type="radio"  name="sel" value="3" <?php if($config['sel'] == '3'): ?>checked<?php endif; ?>>&nbsp;顶部居右</li>
                                                           <li><input type="radio"  name="sel" value="6" <?php if($config['sel'] == '6'): ?>checked<?php endif; ?>>&nbsp;中部居右</li>
                                                           <li><input type="radio"  name="sel" value="9" <?php if($config['sel'] == '9'): ?>checked<?php endif; ?>>&nbsp;底部居右</li>
                                                        </ul>	
                                                </span>	
                                        <div style="clear:both;"></div>
                                        </div>                              
                                    </td>
                                </tr>
                                                               
                                </tbody> 
                                <tfoot>
                                	<tr>
                                	<td><input type="hidden" name="inc_type" value="<?php echo ($inc_type); ?>"></td>
                                	<td class="text-right"><input class="btn btn-primary" type="buuton" onclick="adsubmit()" value="保存"></td></tr>
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
<script type="text/javascript" src="/Public/webuploader/0.1.5/webuploader.js"></script>
<script type="text/javascript" src="/Public/webuploader/upload.js"></script>
<script>
function adsubmit(){
	$('#handlepost').submit();
}

$(document).ready(function(){
	get_province();
	var marktype = "<?php echo ($config['mark_type']); ?>";
	if(marktype == 'text'){
		$('#texttr').show();
	}else{
		$('#imgtr').show();
	}
});
uploadOne('/index.php/Admin/Uploadify/webupload','#mark_img');
function goset(obj){
	window.location.href = $(obj).attr('data-url');
}
   
// 上传水印图片成功回调函数
function call_back(fileurl_tmp){
    $("#mark_img").val(fileurl_tmp);    
}

function setwarter(marktype){
	if(marktype == 'text'){
		$('#texttr').show();
		$('#imgtr').hide();
	}else{
		$('#texttr').hide();
		$('#imgtr').show();
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

</body>
</html>