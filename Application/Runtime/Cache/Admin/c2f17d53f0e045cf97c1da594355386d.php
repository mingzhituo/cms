<?php if (!defined('THINK_PATH')) exit();?><form method="post" enctype="multipart/form-data" target="_blank" id="form-order">
    <table class="table table-border table-bordered radius table-hover" id="list-table" style="border-collapse:collapse;">
        <thead>
            <tr class="text-c">
                <th onclick="javascript:sort('goods_id');">ID</th>
                <th onclick="javascript:sort('goods_name');">商品名称</th>
                <th onclick="javascript:sort('goods_sn');">是否热销</th>
                <th onclick="javascript:sort('cat_id');">分类</th>
                <th onclick="javascript:sort('shop_price');">价格</th>
                <th>供货总量</th>
                <th onclick="javascript:sort('sort');">排序</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($goodsList)): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr class="text-c">
                <td class="va-m"><?php echo ($list["goods_id"]); ?></td>
                <td class="va-m"><?php echo (getSubstr($list["goods_name"],0,33)); ?></td>
                <td class="va-m">
                    <img width="20" height="20" src="/Public/images/<?php if($list[is_hot] == 1): ?>yes.png<?php else: ?>cancel.png<?php endif; ?>" onclick="changeTableVal('goods','goods_id','<?php echo ($list["goods_id"]); ?>','is_hot',this)"/>                          
                </td>
                <td class="va-m"><?php echo ($catList[$list[cat_id]][name]); ?></td>
                <td class="va-m"><?php echo ($list["shop_price"]); ?></td>
                <td class="va-m">                    
                    <input type="text" onchange="updateSort('goods','goods_id','<?php echo ($list["goods_id"]); ?>','store_count',this)"  onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')" name="store_count" size="4" data-table="goods" data-id="<?php echo ($list["goods_id"]); ?>" value="<?php echo ($list["store_count"]); ?>" class="input-sm" />
                </td>
                
                <td class="va-m">
                    <input type="text" onkeyup="this.value=this.value.replace(/[^\d]/g,'')" onpaste="this.value=this.value.replace(/[^\d]/g,'')"  onchange="updateSort('goods','goods_id','<?php echo ($list["goods_id"]); ?>','sort',this)" size="4" value="<?php echo ($list["sort"]); ?>" class="input-sm" />
                </td>
                <td>
                    <a title="编辑" href="javascript:;" onclick="admin_edit('规格编辑','<?php echo U("Admin/Goods/goods/cat_id/".$catid."/goods_id/".$list['goods_id']);?>','1','1000','800')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-info radius">&#xe6df;</i></a>
                    <a title="删除" href="javascript:;" onclick="admin_del('<?php echo U("Admin/Goods/goodsHandle");?>',this,<?php echo ($list['goods_id']); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont btn btn-danger radius">&#xe6e2;</i></a>
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
    /*
     * 清除静态页面缓存
     */
    function ClearGoodsHtml(goods_id)
    {
        $.ajax({
                type:'GET',
                url:"<?php echo U('Admin/System/ClearGoodsHtml');?>",
                data:{goods_id:goods_id},
                dataType:'json',
                success:function(data){
                    layer.alert(data.msg, {icon: 2});                                
                }
        });
    }
    /*
     * 清除商品缩列图缓存
     */
    function ClearGoodsThumb(goods_id)
    {
        $.ajax({
                type:'GET',
                url:"<?php echo U('Admin/System/ClearGoodsThumb');?>",
                data:{goods_id:goods_id},
                dataType:'json',
                success:function(data){
                    layer.alert(data.msg, {icon: 2});                                
                }
        });
    }             
</script>