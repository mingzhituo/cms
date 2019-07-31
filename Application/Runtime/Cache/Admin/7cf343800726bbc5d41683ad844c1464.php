<?php if (!defined('THINK_PATH')) exit();?><form method="post" enctype="multipart/form-data" target="_blank" id="form-order">
    <table class="table table-border table-bordered radius table-hover" id="list-table" style="border-collapse:collapse;">
        <thead>
            <tr class="text-c">
                <th>ID</th>
                <th>属性名称</th>
                <th>商品类型</th>
                <th>属性值的输入方式</th>
                <th>可选值列表</th>
                
                <th>排序</th>
                <th>操作</th> 
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($goodsAttributeList)): $i = 0; $__LIST__ = $goodsAttributeList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr class="text-c">
                <td class="va-m"><?php echo ($list["attr_id"]); ?></td>
                <td class="va-m"><?php echo ($list["attr_name"]); ?></td>
                <td class="va-m"><?php echo ($goodsTypeList[$list[type_id]]); ?></td>
                <td class="va-m"><?php echo ($attr_input_type[$list[attr_input_type]]); ?></td>
                <td class="va-m"><?php echo (mb_substr($list["attr_values"],0,30,'utf-8')); ?></td>
                
                <td class="va-m">
                    <input type="text" onchange="updateSort('goods_attribute','attr_id','<?php echo ($list["attr_id"]); ?>','order',this)" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')"  size="4" value="<?php echo ($list["order"]); ?>"/>
                </td>
                <td>
                    <a title="编辑" href="javascript:;" onclick="admin_edit('规格编辑','<?php echo U("Admin/Goods/goodsAttribute/attr_id/".$list['attr_id']);?>','1','800','500')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-info radius">&#xe6df;</i></a>
                    <a title="删除" href="javascript:;" onclick="admin_del('<?php echo U("Admin/Goods/goodsAttributeHandle");?>',this,<?php echo ($vo['attr_id']); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-danger radius">&#xe6e2;</i></a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</form>
<div class="row">
    <div class="col-sm-6 text-left"></div>
    <div class="col-sm-6 text-right"><?php echo ($page); ?></div>      
</div>  
<script>
    // 点击分页触发的事件
    $(".pagination  a").click(function(){
        cur_page = $(this).attr('data-p');
        ajax_get_table('search-form2',cur_page);
    });
          
</script>