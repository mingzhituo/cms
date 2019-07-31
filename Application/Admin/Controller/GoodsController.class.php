<?php

/**

 * 

 * @authors jamesquery (you@example.org)

 * @date    2017-09-09 10:00:20

 * @version $Id$

 */

namespace Admin\Controller;

use Admin\Logic\GoodsLogic;

use Think\AjaxPage;

use Think\Page;



class GoodsController extends BaseController {

    

    /**

     *  商品分类列表

     */

    public function categoryList(){                

        $GoodsLogic = new GoodsLogic();               

        $cat_list = $GoodsLogic->goods_cat_list();
        // var_dump($cat_list);exit;
        $this->assign('cat_list',$cat_list);        

        $this->display();        

    }

    

    /**

     * 添加修改商品分类

     * 手动拷贝分类正则 ([\u4e00-\u9fa5/\w]+)  ('393','$1'), 

     * select * from tp_goods_category where id = 393

        select * from tp_goods_category where parent_id = 393

        update tp_goods_category  set parent_id_path = concat_ws('_','0_76_393',id),`level` = 3 where parent_id = 393

        insert into `tp_goods_category` (`parent_id`,`name`) values 

        ('393','时尚饰品'),

     */

    public function category_info(){

        $GoodsLogic = new GoodsLogic();

        $id = I('get.id',0);

        $act = $id>0 ? 'edit' : 'add';

        if ($id>0) {

                $goods_category_info = D('GoodsCategory')->where("id={$id}")->find();                                                            

                $level_cat = $GoodsLogic->find_parent_cat($goods_category_info['id']); // 获取分类默认选中的下拉框                

                $this->assign('level_cat',$level_cat);                

                $this->assign('goods_category_info',$goods_category_info);      

        }

        $cat_list = M('goods_category')->where("parent_id = 0")->select(); // 已经改成联动菜单                

        $this->assign('cat_list',$cat_list);                 

        $this->assign('act',$act);

        $this->display();

    }

    

    public function categoryHandle()

    {

        $GoodsLogic = new GoodsLogic();

        $data = I('post.');

        $GoodsCategory = D('GoodsCategory');

        $data['parent_id'] = $_POST['parent_id_1'];

        $_POST['parent_id_2'] && ($data['parent_id'] = $_POST['parent_id_2']);

        if ($data['act'] == 'add') {            

            $result = $GoodsCategory->add($data); // 写入数据到数据库

            if($result){

                $return = [

                    'status' =>1,

                    'msg'=>'添加成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'添加失败'

                ];

            }

            $GoodsLogic->refresh_cat($result);                    

        }elseif ($data['act'] == 'edit') {

            if($data['id'] > 0 && $data['parent_id'] == $data['id'])

            {

                //  编辑

                $return = array(

                    'status' => 0,

                    'msg'   => '上级分类不能为自己',

                );

                $this->ajaxReturn($return);exit;                        

            }

            $result = $GoodsCategory->save($data); // 写入数据到数据库

            if($result!==false){

                $return = [

                    'status' =>1,

                    'msg'=>'编辑成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'编辑失败'

                ];

            }            

            $GoodsLogic->refresh_cat($data['id']);            

        }else{

            // 判断子分类             

            $count = $GoodsCategory->where("parent_id = {$data['id']}")->count("id"); 

            $count > 0 && $this->ajaxReturn(array('status'=>0,'msg'=>'该分类下还有分类不得删除!'));

            // 判断是否存在商品

            $goods_count = M('Goods')->where("cat_id = {$data['id']}")->count('1');

            $goods_count > 0 && $this->ajaxReturn(array('status'=>0,'msg'=>'该分类下有商品不得删除!'));

            // 删除分类

            $result = $GoodsCategory->where("id = {$data['id']}")->delete();   

            if ($result) {

                $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));

            }else{

                $this->ajaxReturn(array('status'=>0,'msg'=>'删除失败!'));

            }

        }

        $this->ajaxReturn($return);exit;

    }



          

    /**

     * 商品类型  用于设置商品的属性

     */

    public function goodsTypeList(){

        $model = M("GoodsType");                

        $count = $model->count();        

        $Page  = new Page($count,100);

        $show  = $Page->show();

        $goodsTypeList = $model->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('show',$show);

        $this->assign('goodsTypeList',$goodsTypeList);

        $this->display();

    }



    /**

     * 商品类型显示页面

     * @return [type] [description]

     */

    public function goodsType()

    {

        $model = M("GoodsType");

        $id = I('get.id',0);

        $act = $id>0 ? 'edit' : 'add';

        if ($id>0) {

            $goodsType = $model->find($id);

           $this->assign('goodsType',$goodsType);    

        }           

        $this->assign('act',$act);

        $this->display();

    }



    /**

     * 商品类型处理

     * @return [type] [description]

     */

    public function goodsTypeHandle()

    {

        $model = M("GoodsType");

        $data = I('post.');

        if ($data['act'] == 'add') {            

            $result = $model->add($data); // 写入数据到数据库

            if($result){

                $return = [

                    'status' =>1,

                    'msg'=>'添加成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'添加失败'

                ];

            }                 

        }elseif ($data['act'] == 'edit') {

            $result = $model->save($data); // 写入数据到数据库

            if($result!==false){

                $return = [

                    'status' =>1,

                    'msg'=>'编辑成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'编辑失败'

                ];

            }            

           

        }else{
            $test = M('goods_attribute')->where("type_id = {$data['id']}")->find();
            if ($test) {
                $this->ajaxReturn(array('status'=>0,'msg'=>'有属性在使用该类型，不能删除!'));
            }else{
                $result = $model->where("id = {$data['id']}")->delete();   

                if ($result) {

                    $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));

                }else{

                    $this->ajaxReturn(array('status'=>0,'msg'=>'删除失败!'));

                }
            }

        }

        $this->ajaxReturn($return);exit;

    }











    /**

     * 商品属性列表    

     */

    public function goodsAttributeList(){       

        $goodsTypeList = M("GoodsType")->select();

        $this->assign('goodsTypeList',$goodsTypeList);

        $this->display();

    }





    /**

     * ajax商品属性列表    

     */

    public function ajaxGoodsAttributeList(){       

        $where = ' 1 = 1 '; // 搜索条件                        

        I('type_id')   && $where = "$where and type_id = ".I('type_id') ;                

        // 关键词搜索               

        $model = M('GoodsAttribute');

        $count = $model->where($where)->count();

        $Page       = new AjaxPage($count,5);

        $show = $Page->show();

        $goodsAttributeList = $model->where($where)->order('`order` desc,attr_id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();

        $goodsTypeList = M("GoodsType")->getField('id,name');

        $attr_input_type = array(0=>'手工录入',1=>' 从列表中选择',2=>' 多行文本框');

        $this->assign('attr_input_type',$attr_input_type);

        $this->assign('goodsTypeList',$goodsTypeList);        

        $this->assign('goodsAttributeList',$goodsAttributeList);

        $this->assign('page',$show);// 赋值分页输出

        $this->display(); 

    }





    /**

     * 商品属性显示页面

     * @return [type] [description]

     */

    public function goodsAttribute()

    {

        $model = D("GoodsAttribute");

        $id = I('get.attr_id',0);

        $act = $id>0 ? 'edit' : 'add';

        if ($id>0) {   

            $goodsAttribute = $model->find($id);           

            $this->assign('goodsAttribute',$goodsAttribute);       

        }          

        $this->assign('act',$act);

        $goodsTypeList = M("GoodsType")->select();           

        $this->assign('goodsTypeList',$goodsTypeList);                   

        $this->display();

    }



    /**

     * 商品属性处理

     * @return [type] [description]

     */

    public function goodsAttributeHandle()

    {

        $model = D("GoodsAttribute");

        if ($_POST['act']!=='del') {

            $_POST['attr_values'] = str_replace('_', '', $_POST['attr_values']); // 替换特殊字符

            $_POST['attr_values'] = str_replace('@', '', $_POST['attr_values']); // 替换特殊字符            

            $_POST['attr_values'] = trim($_POST['attr_values']);

            $type = $data['goods_id'] > 0 ? 2 : 1; // 标识自动验证时的 场景 1 表示插入 2 表示更新

            C('TOKEN_ON', false);

            if (!$model->create(NULL, $type))// 根据表单提交的POST数据创建数据对象

            {

                //  编辑

                $error = $model->getError();

                $error_msg = array_values($error);

                $return_arr = array(

                    'status' => -1,

                    'msg' => $error_msg[0],

                    'data' => $error,

                );

                $this->ajaxReturn($return_arr);exit;

            }                

        }

        $data = I('post.');
        //dump($data);die;

        if ($data['act'] == 'add') {          

            $result = $model->add($data); // 写入数据到数据库

            if($result){

                $return = [

                    'status' =>1,

                    'msg'=>'添加成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'添加失败'

                ];

            }                 

        }elseif ($data['act'] == 'edit') {

            $result = $model->where("attr_id={$data['attr_id']}")->save($data); // 写入数据到数据库

            if($result!==false){

                $return = [

                    'status' =>1,

                    'msg'=>'编辑成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'编辑失败'

                ];

            }            

           

        }else{

            // 判断 有无商品使用该属性

            $count = M("GoodsAttr")->where("attr_id = {$data['attr_id']}")->count("1");
           // dump($count);die;   

            $count > 0 && $this->ajaxReturn(array('status'=>0,'msg'=>'有商品使用该属性,不得删除!'));

            $result = $model->where("attr_id = {$data['attr_id']}")->delete();   

            if ($result) {

                $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));

            }else{

                $this->ajaxReturn(array('status'=>0,'msg'=>'删除失败!'));

            }

        }

        $this->ajaxReturn($return);exit;

    }



    




    

    /**

     *  商品列表

     */

    public function goodsList(){ 
        $cat_id = I('cat_id');
        $this->assign('catid',$cat_id);

        $GoodsLogic = new GoodsLogic();        

        $categoryList = $GoodsLogic->getSortCategory();

        $this->assign('categoryList',$categoryList);

        $this->assign('brandList',$brandList);

        $this->display();          

    }





    /**

     *  ajax商品列表

     */

    public function ajaxGoodsList()

    {

        $where = ' 1 = 1 '; // 搜索条件                

        I('intro')    && $where = "$where and ".I('intro')." = 1" ;        

        $cat_id = I('cat_id',0);
        $this->assign('catid',$cat_id);
        // 关键词搜索               

        $key_word = I('key_word') ? trim(I('key_word')) : '';

        if($key_word)

        {

            $where = "$where and (goods_name like '%$key_word%' or goods_sn like '%$key_word%')" ;

        }

        

        if($cat_id > 0)

        {

            $grandson_ids = getCatGrandson($cat_id); 

            $where .= " and cat_id in(".  implode(',', $grandson_ids).") "; // 初始化搜索条件

        }

        

        // var_dump($where);exit;

        $model = M('Goods');

        $count = $model->where($where)->count();

        $Page  = new AjaxPage($count,10);

        /**  搜索条件下 分页赋值

        foreach($condition as $key=>$val) {

            $Page->parameter[$key]   =   urlencode($val);

        }

        */

        $show = $Page->show();

        $orderby1 = I('post.orderby1','goods_id');

        $orderby2 = I('post.orderby2','desc');

        $order_str = "`{$orderby1}` {$orderby2}";

        $goodsList = $model->where($where)->order($order_str)->limit($Page->firstRow.','.$Page->listRows)->select();

        // var_dump($goodsList);exit;



        $catList = D('goods_category')->select();

        $catList = convert_arr_key($catList, 'id');

        $this->assign('catList',$catList);

        $this->assign('goodsList',$goodsList);

        $this->assign('page',$show);// 赋值分页输出

        $this->display();

    }



    /**

     * 商品显示页面

     * @return [type] [description]

     */

    public function goods()

    {

        $GoodsLogic = new GoodsLogic();

        $Goods = D('Goods'); //

        $id = I('get.goods_id',0);

        $act = $id>0 ? 'edit' : 'add';

        if ($id>0) {                       

            $goodsInfo = M('Goods')->where('goods_id=' . $id)->find();

            $level_cat = $GoodsLogic->find_parent_cat($goodsInfo['cat_id']); // 获取分类默认选中的下拉框

            $this->assign('level_cat', $level_cat);

            $this->assign('goodsInfo', $goodsInfo);  // 商品详情

            $goodsImages = M("GoodsImages")->where('goods_id =' . $id)->select();

            $this->assign('goodsImages', $goodsImages);  // 商品相册
            $catid=I('cat_id');
            $this->assign('sta',$catid);

        }          

        $this->assign('act',$act);           

        //$cat_list = $GoodsLogic->goods_cat_list(); // 已经改成联动菜单

        $cat_list = M('goods_category')->where("parent_id = 0")->select(); // 已经改成联动菜单

        $goodsType = M("GoodsType")->select();

        $this->assign('cat_list', $cat_list);

        $this->assign('goodsType', $goodsType);

        $this->display();

    }



    /**

     * 商品处理

     * @return [type] [description]

     */

    public function goodsHandle()

    {

        $GoodsLogic = new GoodsLogic();

        $Goods = D('Goods'); //      

        $data = I('post.');
     
        if ($_POST['act']!=='del') {

            $type = $data['goods_id'] > 0 ? 2 : 1; // 标识自动验证时的 场景 1 表示插入 2 表示更新

            // C('TOKEN_ON', false);//令牌验证

            if (!$Goods->create(NULL, $type))// 根据表单提交的POST数据创建数据对象

            {

                //  编辑

                $error = $Goods->getError();

                $error_msg = array_values($error);

                $return_arr = array(

                    'status' => -1,

                    'msg' => $error_msg[0],

                    'data' => $error,

                );

                $this->ajaxReturn($return_arr);exit;

            }

            // C('TOKEN_ON',true);

            $data['on_time'] = time(); // 上架时间

            //$Goods->cat_id = $_POST['cat_id_1'];

            $data['cat_id_2'] && ($data['cat_id'] = $data['cat_id_2']);

            $data['cat_id_3'] && ($data['cat_id'] = $data['cat_id_3']);
                    

        }

        if ($data['act'] == 'add') { 

            $goods_id = $result = $Goods->add($data); // 写入数据到数据库

            if($result){

                $Goods->afterSave($goods_id);   

                $GoodsLogic->saveGoodsAttr($goods_id, $_POST['goods_type']); // 处理商品 属性              

                $return = [

                    'status' =>1,

                    'msg'=>'添加成功'

                ];

            }else{

                $return = [

                    'status' =>0,

                    'msg'=>'添加失败'

                ];

            }                 

        }elseif ($data['act'] == 'edit') {
            $old_data = $Goods->where('goods_id='.$data['goods_id'])->find();
//dump($old_data);die;
            $result = $Goods->save($data); // 写入数据到数据库
            //dump($result);

            $GoodsLogic->saveGoodsAttr($_POST['goods_id'], $_POST['goods_type']); // 处理商品 属性

            if($result!==false){

                $Goods->afterSave($data['goods_id']);
                if ($old_data['original_img'] != $data['original_img']) {
                    @unlink('.'.$old_data['original_img']);
                }
                $return = [

                    'status' =>1,

                    'msg'=>'编辑成功'

                ];

            }else{
                if ($old_data['original_img'] != $data['original_img']) {
                    @unlink('.'.$data['original_img']);   
                }
                $return = [

                    'status' =>0,

                    'msg'=>'编辑失败'

                ];

            }            

           

        }else{

        $goods_id = $data['goods_id'];

        $error = '';

        if($error)

        {

            $return_arr = array('status' => -1,'msg' =>$error,'data'  =>'',);   //$return_arr = array('status' => -1,'msg' => '删除失败','data'  =>'',);        

            $this->ajaxReturn($return_arr);            

        }



        // 删除此商品        
        $old = M("Goods")->where('goods_id ='.$goods_id)->find();
        
        unlink('.'.$old['original_img']);
        $resut = M("Goods")->where('goods_id ='.$goods_id)->delete();  //商品表
        //dump($old);exit;
       // M("goods_consult")->where('goods_id ='.$goods_id)->delete();  //商品咨询

        M("goods_images")->where('goods_id ='.$goods_id)->delete();  //商品相册

        M("goods_attr")->where('goods_id ='.$goods_id)->delete();  //商品属性         

        $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));

        }

        $this->ajaxReturn($return);exit;

    }



    /**

     * 动态获取商品属性输入框 根据不同的数据返回不同的输入框类型

     */

    public function ajaxGetAttrInput(){

        $GoodsLogic = new GoodsLogic();//实例化goods的逻辑类

        $str = $GoodsLogic->getAttrInput($_REQUEST['goods_id'],$_REQUEST['type_id']);//调用逻辑类的getAttrInput

        exit($str);

    }




    

    /**

     * 删除商品相册图

     */

    public function del_goods_images()

    {

        $path = I('filename','');

        M('goods_images')->where("image_url = '$path'")->delete();

    }





}