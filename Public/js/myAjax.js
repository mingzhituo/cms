/**
 * Created by admin on 2015/9/21.
 */

/**
 *  Ajax通用提交表单
 *  @var  form表单的id属性值  form_id
 *  @var  提交地址 subbmit_url
 */

function post_form(form_id,subbmit_url){
    if(form_id == '' && subbmit_url == ''){
        alert('缺少必要参数');
        return false;
    }
    //  序列化表单值
    var data = $('#'+form_id).serialize();

    $.post(subbmit_url,data,function(result){
        var obj = $.parseJSON(result);
        if(obj.status == 0){
            alert(obj.msg);
            return false;
        }
        if(obj.status == 1){
            alert(obj.msg);
            if(obj.data.return_url){
                //  返回跳转链接
                location.href = obj.data.return_url;
            }else{
                //  刷新页面
                location.reload();
            }
            return;
        }
    })
}



/**
 * 删除
 * @returns {void}
 */
 /*资讯-批量删除*/
    function datadel() {
        layer.confirm('您确定要删除这些条数据吗？', {
            btn: ['确定','取消'] //按钮
        }, function() {
            var cks=document.getElementsByName("check");
            var str="";
            //拼接所有的id
            for(var i=0;i<cks.length;i++){
                if(cks[i].checked){
                    str+=cks[i].value+"&";
                }
            }
            //去掉字符串末尾的‘&’
            str=str.substring(0, str.length-1);
                $.ajax({
                    url: "{:url('artical/delall')}",
                    type: "POST",
                    data: {"str": str},
                    dataType: "json",
                    success: function (result) {
//  console.log(data);
                        if(result.status == 0) {
                            return dialog.error(result.message);

                        }
                        if(result.status == 1) {
                            return dialog.success(result.message, "{:url('artical/_list')}");
                        }
                        if(result.status == 2) {
                            return dialog.error(result.message);

                        }
                    }
                });


            }
        )



    }

    
 function publicHandleAll(type){
        var ids = '';
        $('#flexigrid .trSelected').each(function(i,o){
//            ids.push($(o).data('id'));
            ids += $(o).data('id')+',';
        });
        if(ids == ''){
            layer.msg('至少选择一项', {icon: 2, time: 2000});
            return false;
        }
        publicHandle(ids,type); //调用删除函数
    }
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
function del_fun(del_url)
{
    if(confirm("确定要删除吗?"))
        location.href = del_url;
}  




// 修改指定表的指定字段值
function changeTableVal(table,id_name,id_value,field,obj)
{
		var src = "";
		 if($(obj).attr('src').indexOf("cancel.png") > 0 )
		 {          
				src = '/Public/images/yes.png';
				var value = 1;
				
		 }else{                    
				src = '/Public/images/cancel.png';
				var value = 0;
		 }                                                 
		$.ajax({
				url:"/index.php?m=Admin&c=Index&a=changeTableVal&table="+table+"&id_name="+id_name+"&id_value="+id_value+"&field="+field+'&value='+value,			
				success: function(data){									
					$(obj).attr('src',src);           
				}
		});		
}

// 修改指定表的排序字段
function updateSort(table,id_name,id_value,field,obj)
{		       
 		var value = $(obj).val();
		$.ajax({
				url:"/index.php?m=Admin&c=Index&a=changeTableVal&table="+table+"&id_name="+id_name+"&id_value="+id_value+"&field="+field+'&value='+value,			
				success: function(data){									
                    window.location.reload(true);
                    layer.msg('更新成功', {icon: 1},10);   
				}
		});		
}
 