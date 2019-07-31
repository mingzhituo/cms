<?php
namespace Home\Controller;
use Think\Controller;
class BaseController extends Controller {
       
    /*
     * 初始化操作
     */
    public function _initialize() 
    { 
        $this->session_id = session_id(); //当前的session_id
        define('SESSION_ID',$this->session_id); //当前的session_id保存为常量，供其它方法调用
        D('visit')->log();
        $icon_3c = D('ad')->get_one(43);//39
        $icon_mh = D('ad')->get_one(44);//38
        $icon_iso = D('ad')->get_one(42);//40
       $icon = D('ad')->get_pic_url("pid=4");

        $config2 = M('config')->getField('name,value');
        $weixin = D('ad')->get_pic_url('pid=3');
          $img=D('ad')->where('ad_id =66')->find();
        //dump($weixin);die;
        $nav = M('navigation')->order('sort desc')->where('is_show=1')->select();

        $nav_n = M('navigation')->where('`location`="'.CONTROLLER_NAME.'"')->find();

        //友链
        $flink=D('friend_link')->where('is_show=1')->field('link_name,link_url')->order($sort)->limit(6)->select();

        $casecat=D('article_cat')->get_infos_pid(15,'sort_order');
        //dump($casecat);die;
        $about = D('article_cat')->get_infos_pid(1,'sort_order');

        //dump($about);die;
        //$pro = D('goods_category')->get_cat(); get_info_pid(0,'sort_order');
        $pro = D('goods_category')->get_info_pid(0,'sort_order');
          $tre = D('goods_category')->get_cat(0,'sort_order');
   
       $tree =  D('goods_category')->get_tree_cat();

       //dump($tree);die ;
       $artTree=D('article_cat')->get_tree_cat();

       //$qtree = D('goods_category')->where('parent_id!=0')->select();

      //dump($qtree);die;
        $pro_show2 = D('goods')->get_infos('0 or is_hot=1','sort asc',5);
        //var_dump($pro);die;
        $newcat = D('article_cat')->get_infos_pid(4,'sort_order');
         $news2 = D('article')->get_info_cat('31 or cat_id=32',false,'publish_time desc',6);
         //dump($news2);die;
         $aboutdesc=D('article')->get_one('127');
        // dump($aboutdesc);die;
         $newshot = D('article')->where('cat_id=17 or cat_id=16')->order('click desc')->limit(6)->select();
        //var_dump($newcat);die;
        //留言分类
        $liuyan = D('article_cat')->get_infos_pid(10,'sort_order');

        $banner = D('ad')->get_infos_pid('1 and enabled=1','orderby desc');

        $banner2 = D('ad')->where('ad_id=43')->find();
      //  dump($banner2);die;
        $place = M('region')->where("id=".$config2['city'].' or id='.$config2['district'].' or id='.$config2['province'])->getField('id,name');
     $qr = D('ad')->where('pid =3')->field('ad_title,ad_code,ad_link')->order('orderby desc')->select();
        $acateres=D('article_cat')->where(array('parent_id'=>0))->select();
        
        foreach ($acateres as $k => $v) {
            $children=D('article_cat')->where(array('pid'=>$v['id']))->select();
            if($children){
                $acateres[$k]['children']=$children;
            }else{
                $acateres[$k]['children']=0;
            }
        }

        $data_b = [
          'img'=>$img,
          'qr' =>$qr,
           'pro_show2'=>$pro_show2,
           'acateres' => $acateres,
           'icon_3c'=>$icon_3c,
           'icon_mh'=>$icon_mh,
           'icon_iso'=>$icon_iso,
           'icon'=>$icon,
           'config2'=>$config2,
           'weixin'=>$weixin,
           'nav'=>$nav,
           'nav_n'=>$nav_n,
           'about'=>$about,
           'aboutdesc'=>$aboutdesc,
           'pro'=>$pro,
           'newcat'=>$newcat,
           'casecat'=>$casecat,
           'banner'=>$banner,
           'banner2'=>$banner2,
           'place'=>$place,
           'liuyan'=>$liuyan,
           'flink'=>$flink,
           'news2'=>$news2,
           'newshot'=>$newshot,
            'artTree'=>$artTree,
           'tree'=>$tree
        ];
        $this->assign($data_b);
        
    }    







    /**
     * 保存公告变量到 smarty中 比如 导航 
     */
    public function public_assign()
    {
        
       $tpshop_config = array();
       $tp_config = M('config')->cache(true,TPSHOP_CACHE_TIME)->select();       
       foreach($tp_config as $k => $v)
       {
          if($v['name'] == 'hot_keywords'){
             $tpshop_config['hot_keywords'] = explode('|', $v['value']);
          }           
          $tpshop_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
       }                        
       
       $goods_category_tree = get_goods_category_tree();    
       $this->cateTrre = $goods_category_tree;
       $this->assign('goods_category_tree', $goods_category_tree);                     
       $brand_list = M('brand')->cache(true,TPSHOP_CACHE_TIME)->field('id,parent_cat_id,logo,is_hot')->where("parent_cat_id>0")->select();              
       $this->assign('brand_list', $brand_list);
       $this->assign('tpshop_config', $tpshop_config);          
    }
}