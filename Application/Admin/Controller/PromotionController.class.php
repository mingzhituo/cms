<?php
/**
 * 
 * @authors jamesquery (you@example.org)
 * @date    2017-09-09 10:00:20
 * @version $Id$
 */

namespace Admin\Controller;
use Think\Page;
use Admin\Logic\GoodsLogic;

class PromotionController extends BaseController {
    /**
     * [选择商品页面]
     * @return [type] [description]
     */
    public function search_goods(){
        $GoodsLogic = new \Admin\Logic\GoodsLogic;
        $brandList = $GoodsLogic->getSortBrands();
        $this->assign('brandList',$brandList);
        $categoryList = $GoodsLogic->getSortCategory();
        $this->assign('categoryList',$categoryList);
        
        $goods_id = I('goods_id');
        $where = ' is_on_sale = 1 and prom_type=0 and store_count>0 ';//搜索条件
        if(!empty($goods_id)){
            $where .= " and goods_id not in ($goods_id) ";
        }
        I('intro')  && $where = "$where and ".I('intro')." = 1";
        if(I('cat_id')){
            $this->assign('cat_id',I('cat_id'));
            $grandson_ids = getCatGrandson(I('cat_id'));
            $where = " $where  and cat_id in(".  implode(',', $grandson_ids).") "; // 初始化搜索条件
        }
        if(I('brand_id')){
            $this->assign('brand_id',I('brand_id'));
            $where = "$where and brand_id = ".I('brand_id');
        }
        if(!empty($_REQUEST['keywords']))
        {
            $this->assign('keywords',I('keywords'));
            $where = "$where and (goods_name like '%".I('keywords')."%' or keywords like '%".I('keywords')."%')" ;
        }
        $count = M('goods')->where($where)->count();
        $Page  = new \Think\Page($count,1);
        $goodsList = M('goods')->where($where)->order('goods_id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        $show = $Page->show();//分页显示输出
        $this->assign('page',$show);//赋值分页输出
        $this->assign('goodsList',$goodsList);
        $tpl = I('get.tpl','select_goods');
        $this->display($tpl);
    }


    //限时抢购
    public function flash_sale(){
        $condition = array();
        $model = M('flash_sale');
        $count = $model->where($condition)->count();
        $Page  = new \Think\Page($count,10);         
        $show = $Page->show();
        $prom_list = $model->where($condition)->order("id desc")->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('prom_list',$prom_list);
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    }
    
    /**
     * [抢购显示页面]
     * @return [type] [description]
     */
    public function flash_sale_info(){
        $model = M("flash_sale");
        $id = I('get.id',0);
        $act = $id>0 ? 'edit' : 'add';
        $this->assign('act',$act);
        $info['start_time'] = date('Y-m-d H:i:s',time());
        $info['end_time'] = date('Y-m-d 23:59:59',time()+3600*24*60);                 
        if ($id>0) {
            $info = M('flash_sale')->where("id={$id}")->find();
            $info['start_time'] = date('Y-m-d H:i:s',$info['start_time']);
            $info['end_time'] = date('Y-m-d H:i:s',$info['end_time']);            
        }  
        $this->assign('info',$info);    
        $this->assign('min_date',date('Y-m-d'));
        $this->display();
    }

    /**
     * [抢购显示处理]
     * @return [type] [description]
     */
    public function flash_sale_info_Handle()
    {
        $model = M("flash_sale");
        $data = I('post.');
        $data['start_time'] = strtotime($data['start_time']);
        $data['end_time'] = strtotime($data['end_time']);        
        if ($data['act'] == 'add') {            
            $result = $model->add($data); // 写入数据到数据库
            if($result){
                $return = [
                    'status' =>1,
                    'msg'=>'添加成功'
                ];
                M('goods')->where("goods_id=".$data['goods_id'])->save(array('prom_id'=>$result,'prom_type'=>1));
                adminLog("管理员添加抢购活动 ".$data['name']);                
            }else{
                $return = [
                    'status' =>0,
                    'msg'=>'添加失败'
                ];
            }                 
        }elseif ($data['act'] == 'edit') {
            $result = $model->where("id={$data['id']}")->save($data); // 写入数据到数据库
            if($result!==false){
                $return = [
                    'status' =>1,
                    'msg'=>'编辑成功'
                ];
                adminLog("管理员更新抢购活动 ".$data['name']);
                M('goods')->where("prom_type=1 and prom_id=".$data['id'])->save(array('prom_id'=>0,'prom_type'=>0));
                M('goods')->where("goods_id=".$data['goods_id'])->save(array('prom_id'=>$data['id'],'prom_type'=>1));                
            }else{
                $return = [
                    'status' =>0,
                    'msg'=>'编辑失败'
                ];
            }            
           
        }else{
            $result = $model->where("id = {$data['id']}")->delete();   
            if ($result) {
                M('goods')->where("prom_type=1 and prom_id={$data['id']}")->save(array('prom_id'=>0,'prom_type'=>0));
                $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));
            }else{
                $this->ajaxReturn(array('status'=>0,'msg'=>'删除失败!'));
            }
        }
        $this->ajaxReturn($return);exit;
    } 

    
    
    public function group_buy_list(){
        $Ad =  M('group_buy');
        $count = $Ad->count();
        $Page = new \Think\Page($count,10);        
        $res = $Ad->order('id desc')->limit($Page->firstRow.','.$Page->listRows)->select();
        if($res){
            foreach ($res as $val){
                $val['start_time'] = date('Y-m-d H:i',$val['start_time']);
                $val['end_time'] = date('Y-m-d H:i',$val['end_time']);
                $list[] = $val;
            }
        }
        $this->assign('list',$list);
        $show = $Page->show();
        $this->assign('page',$show);
        $this->display();
    }
    
    public function group_buy(){
        $model = M("group_buy");
        $id = I('get.id',0);
        $act = $id>0 ? 'edit' : 'add';
        $this->assign('act',$act);
        $info['start_time'] = date('Y-m-d',time());
        $info['end_time'] = date('Y-m-d',time()+3600*365);                 
        if ($id>0) {
            $info = $model->where("id={$id}")->find();
            $info['start_time'] = date('Y-m-d',$info['start_time']);
            $info['end_time'] = date('Y-m-d',$info['end_time']);            
        }  
        $this->assign('info',$info);    
        $this->assign('min_date',date('Y-m-d'));
        $this->display();
    }
    
    public function groupbuyHandle(){
        $model = M("group_buy");
        $data = I('post.');
        $data['groupbuy_intro'] = htmlspecialchars(stripslashes($_POST['groupbuy_intro']));
        $data['start_time'] = strtotime($data['start_time']);
        $data['end_time'] = strtotime($data['end_time']);        
        if ($data['act'] == 'add') {            
            $result = $model->add($data); // 写入数据到数据库
            if($result){
                $return = [
                    'status' =>1,
                    'msg'=>'添加成功'
                ];
                M('goods')->where("goods_id=".$data['goods_id'])->save(array('prom_id'=>$result,'prom_type'=>2));
                // adminLog("管理员添加抢购活动 ".$data['name']);                
            }else{
                $return = [
                    'status' =>0,
                    'msg'=>'添加失败'
                ];
            }                 
        }elseif ($data['act'] == 'edit') {
            $result = $model->where("id={$data['id']}")->save($data); // 写入数据到数据库
            if($result!==false){
                $return = [
                    'status' =>1,
                    'msg'=>'编辑成功'
                ];
                M('goods')->where("prom_type=2 and prom_id=".$data['id'])->save(array('prom_id'=>0,'prom_type'=>0));
                M('goods')->where("goods_id=".$data['goods_id'])->save(array('prom_id'=>$data['id'],'prom_type'=>2));             
            }else{
                $return = [
                    'status' =>0,
                    'msg'=>'编辑失败'
                ];
            }            
           
        }else{
            $result = $model->where("id = {$data['id']}")->delete();   
            if ($result) {
                M('goods')->where("prom_type=2 and prom_id=".$data['id'])->save(array('prom_id'=>0,'prom_type'=>0));
                $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));
            }else{
                $this->ajaxReturn(array('status'=>0,'msg'=>'删除失败!'));
            }
        }
        $this->ajaxReturn($return);exit;
    }


    
        /**
         * 商品促销列表
         */
    public function prom_goods_list()
    {
        $parse_type = array('0'=>'直接打折','1'=>'减价优惠','2'=>'固定金额出售','3'=>'买就赠优惠券');                               
        $level = M('user_level')->select();
        if($level){
            foreach ($level as $v){
                $lv[$v['level_id']] = $v['level_name'];
            }
        }
        $this->assign("parse_type",$parse_type);
                
                $count = M('prom_goods')->count();
                $Page  = new \Think\Page($count,10);         
                $show = $Page->show();                      
        $res = M('prom_goods')->limit($Page->firstRow.','.$Page->listRows)->select();    
        if($res){
            foreach ($res as $val){
                if(!empty($val['group']) && !empty($lv)){
                    $val['group'] = explode(',', $val['group']);
                    foreach ($val['group'] as $v){
                        $val['group_name'] .= $lv[$v].',';
                    }
                }
                $prom_list[] = $val;
            }
        }
                $this->assign('page',$show);// 赋值分页输出
        $this->assign('prom_list',$prom_list);
        $this->display();
    }
    
    /**
     * [商品促销显示]
     * @return [type] [description]
     */
    public function prom_goods_info(){
        $level = M('user_level')->select();
        $this->assign('level',$level);        
        $model = M("prom_goods");
        $id = I('get.id',0);
        $act = $id>0 ? 'edit' : 'add';
        $this->assign('act',$act);
        $info['start_time'] = date('Y-m-d',time());
        $info['end_time'] = date('Y-m-d',time()+3600*365);                 
        if ($id>0) {
            $info = $model->where("id={$id}")->find();
            $info['start_time'] = date('Y-m-d',$info['start_time']);
            $info['end_time'] = date('Y-m-d',$info['end_time']);
            $prom_goods = M('goods')->where("prom_id={$id} and prom_type=3")->select();
            $this->assign('prom_goods',$prom_goods);        
        }  
        $this->assign('info',$info);    
        $this->assign('min_date',date('Y-m-d'));
        $coupon = M('coupon')->where("type=0")->select();  
        $this->assign('coupon',$coupon);  
        $this->display();
    }


    /**
     * [商品促销处理]
     * @return [type] [description]
     */    
    public function promGoodsInfoHandle(){
        $model = M("prom_goods");
        $data = I('post.');
        $data['start_time'] = strtotime($data['start_time']);
        $data['end_time'] = strtotime($data['end_time']);  
        $data['group'] = implode(',', $data['group']); 
        if ($data['act'] == 'add') { 
            $insert = $result = $model->add($data); // 写入数据到数据库
            if($result){
            adminLog("管理员添加了商品促销 ".I('name'));                   
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
            $result = $model->where("id={$data['id']}")->save($data); // 写入数据到数据库
            if($result!==false){
                adminLog("管理员修改了商品促销 ".I('name'));
                $insert = $data['id'];
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
            $order_goods = M('order_goods')->where("prom_type = 3 and prom_id = {$data['id']}")->find();
            if(!empty($order_goods))
            {
                $this->ajaxReturn(array('status'=>-1,'msg'=>'该活动有订单参与不能删除!'));  
            }                
            M("goods")->where("prom_id={$data['id']} and prom_type=3")->save(array('prom_id'=>0,'prom_type'=>0));
            $result = $model->where("id = {$data['id']}")->delete();   
            if ($result) {
                $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));
            }else{
                $this->ajaxReturn(array('status'=>0,'msg'=>'删除失败!'));
            }
        }
            // var_dump($data['goods_id']);exit;
        if(is_array($data['goods_id'])){
            $goods_id = implode(',', $data['goods_id']);
            // var_dump($goods_id);exit;
            if($data['id']>0){
                M("goods")->where("prom_id={$data['id']} and prom_type=3")->save(array('prom_id'=>0,'prom_type'=>0));
            }
            M("goods")->where("goods_id in($goods_id)")->save(array('prom_id'=>$insert,'prom_type'=>3));
        }else{
            $this->ajaxReturn(array('status'=>-3,'msg'=>'请选择商品!'));exit;
        }
        $this->ajaxReturn($return);exit;
    }
    

    
    /**
     * 活动列表
     */
    public function prom_order_list()
    {
        $parse_type = array('0'=>'满额打折','1'=>'满额优惠金额','2'=>'满额送积分','3'=>'满额送优惠券');      
        $level = M('user_level')->select();
        if($level){
            foreach ($level as $v){
                $lv[$v['level_id']] = $v['level_name'];
            }
        }
                $count = M('prom_order')->count();
                $Page  = new \Think\Page($count,10);         
                $show = $Page->show();               
        $res = M('prom_order')->limit($Page->firstRow.','.$Page->listRows)->select();
        if($res){
            foreach ($res as $val){
                if(!empty($val['group']) && !empty($lv)){
                    $val['group'] = explode(',', $val['group']);
                    foreach ($val['group'] as $v){
                        $val['group_name'] .= $lv[$v].',';
                    }
                }
                $prom_list[] = $val;
            }
        }
                $this->assign('page',$show);// 赋值分页输出                  
                $this->assign("parse_type",$parse_type);
        $this->assign('prom_list',$prom_list);
        $this->display();
    }
    
    public function prom_order_info(){
        $this->assign('min_date',date('Y-m-d'));
        $level = M('user_level')->select();
        $this->assign('level',$level);
        $id = I('get.id',0);
        $act = $id>0 ? 'edit' : 'add';
        $this->assign('act',$act);
        $info['start_time'] = date('Y-m-d');
        $info['end_time'] = date('Y-m-d',time()+3600*24*60);
        if($id>0){
            $info = M('prom_order')->where("id=$id")->find();
            $info['start_time'] = date('Y-m-d',$info['start_time']);
            $info['end_time'] = date('Y-m-d',$info['end_time']);
        }
        $this->assign('info',$info);
        $this->assign('min_date',date('Y-m-d'));
        $coupon = M('coupon')->where("type=0")->select();  
        $this->assign('coupon',$coupon);          
        $this->display();
    }
    
    public function promOrderInfoHandle(){
        $model = M("prom_order");
        $data = I('post.');
        $data['start_time'] = strtotime($data['start_time']);
        $data['end_time'] = strtotime($data['end_time']);  
        $data['group'] = implode(',', $data['group']); 
        if ($data['act'] == 'add') { 
            $insert = $result = $model->add($data); // 写入数据到数据库
            if($result){                 
                $return = [
                    'status' =>1,
                    'msg'=>'添加成功'
                ];
                adminLog("管理员添加抢购活动 ".$data['name']);                
            }else{
                $return = [
                    'status' =>0,
                    'msg'=>'添加失败'
                ];
            }                 
        }elseif ($data['act'] == 'edit') {
            $result = $model->where("id={$data['id']}")->save($data); // 写入数据到数据库
            if($result!==false){
                adminLog("管理员添加了商品促销 ".$data['name']);
                $insert = $data['id'];
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
            $order = M('order')->where("order_prom_id = {$data['id']}")->find();
            if(!empty($order))
            {
                $this->ajaxReturn(array('status'=>-1,'msg'=>'该活动有订单参与不能删除!'));  
            }                
            $result = $model->where("id = {$data['id']}")->delete();   
            if ($result) {
                $this->ajaxReturn(array('status'=>1,'msg'=>'删除成功!'));
            }else{
                $this->ajaxReturn(array('status'=>0,'msg'=>'删除失败!'));
            }
        }
        $this->ajaxReturn($return);exit;
    }
    
    public function get_goods(){
        $prom_id = I('id');
        $count = M('goods')->where("prom_id=$prom_id and prom_type=3")->count(); 
        $Page  = new \Think\Page($count,10);
        $goodsList = M('goods')->where("prom_id=$prom_id and prom_type=3")->order('goods_id DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
        $show = $Page->show();
        $this->assign('page',$show);
        $this->assign('goodsList',$goodsList);
        $this->display(); 
    }   
    
    
    public function index(){
        $this->display();
    }
    
}