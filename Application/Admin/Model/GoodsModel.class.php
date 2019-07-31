<?php

/**

 */



namespace Admin\Model;

use Think\Model;

class GoodsModel extends Model {

    protected $patchValidate = true; // 系统支持数据的批量验证功能，

    /**

     *     

        self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）

        self::MUST_VALIDATE 或者1 必须验证

        self::VALUE_VALIDATE或者2 值不为空的时候验证

     * 

     * 

        self::MODEL_INSERT或者1新增数据时候验证

        self::MODEL_UPDATE或者2编辑数据时候验证

        self::MODEL_BOTH或者3全部情况下验证（默认）       

     */

    protected $_validate = array(

        array('goods_name','require','商品名称必须填写！',1 ,'',3),         

        //array('cat_id','require','商品分类必须填写！',1 ,'',3),        

        array('cat_id','0','商品分类必须填写。',1,'notequal',3),       

        array('shop_price','/\d{1,10}(\.\d{1,2})?$/','本店售价格式不对。',2,'regex'),        

        array('member_price','/\d{1,10}(\.\d{1,2})?$/','会员价格式不对。',2,'regex'),        

        array('market_price','/\d{1,10}(\.\d{1,2})?$/','市场价格式不对。',2,'regex'), // currency

     );   

    

    

    

    /**

     * 后置操作方法

     * 自定义的一个函数 用于数据保存后做的相应处理操作, 使用时手动调用

     * @param int $goods_id 商品id

     */

    public function afterSave($goods_id)

    {            

         // 商品货号

         //$goods_sn = "T".str_pad($goods_id,7,"0",STR_PAD_LEFT);   

         //$this->where("goods_id = $goods_id and goods_sn = ''")->save(array("goods_sn"=>$goods_sn)); // 根据条件更新记录

                 

         // 商品图片相册  图册

         if(count($_POST['goods_images']) > 0)

         {                                    

             $goodsImagesArr = M('GoodsImages')->where("goods_id = $goods_id")->getField('img_id,image_url'); // 查出所有已经存在的图片

            

             // 添加图片

             foreach($_POST['goods_images'] as $key => $val)

             {

                 if($val == null)  continue; 

                 // var_dump($val,$goodsImagesArr);exit;                                 

                 if(in_array($val, $goodsImagesArr))

                 {  

                    // echo 111;exit;               

                    unset($_POST['goods_images'][$key]);                    

                 }else{

                    // echo 222;exit;

                    $data[] = ['goods_id'=>$goods_id,'image_url'=>$val];

                 }

             }

            M("GoodsImages")->addAll($data);

         }


    }



}

