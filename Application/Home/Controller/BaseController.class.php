<?php
namespace Home\Controller;
use Think\Controller;

class BaseController extends Controller {
       
    /*
     * 初始化操作
     */
    public function _initialize() 
    { 
        $this->session_id = session_id(); // 当前的 session_id
        define('SESSION_ID',$this->session_id); //将当前的session_id保存为常量，供其它方法调用
        D('visit')->log();
        $icon_3c = D('ad')->get_one(43);//39
        $icon_mh = D('ad')->get_one(44);//38
        $icon_iso = D('ad')->get_one(42);//40
       $icon = D('ad')->get_pic_url("pid=4");

        $config2 = M('config')->getField('name,value');
        $weixin = D('ad')->get_pic_url('pid=3');
        $nav = M('navigation')->order('sort desc')->where('is_show=1')->select();

        $nav_n = M('navigation')->where('`location`="'.CONTROLLER_NAME.'"')->find();

        //友链
        $flink=D('friend_link')->where('is_show=1')->field('link_name,link_url')->order($sort)->limit(6)->select();

        $casecat=D('article_cat')->get_infos_pid(15,'sort_order');
       
        $about = D('article_cat')->get_infos_pid(1,'sort_order');
        $aba =D('article')->get_info_cat(8,false,'publish_time desc',6);
     
        //dump($aba);die;
        //$pro = D('goods_category')->get_cat(); get_info_pid(0,'sort_order');
        $pro = D('goods_category')->get_info_pid(0,'sort_order');
          $tre = D('goods_category')->get_cat(0,'sort_order');
       $tree =  D('goods_category')->get_tree_cat();
       //$qtree = D('goods_category')->where('parent_id!=0')->select();

      //dump($qtree);die;
        $pro_show2 = D('goods')->get_infos('0 or is_hot=1','sort asc',5);
        
        $newcat = D('article_cat')->get_infos_pid(4,'sort_order');
        $newcats = $this->pChild(4);
        //dump($newcats);die;

         $news2 = D('article')->get_info_cat($newcats,false,'publish_time desc',4);
         $aboutdesc=D('article')->get_one('127');
        // dump($aboutdesc);die;
         $newshot = D('article')->where('cat_id=17 or cat_id=16')->order('click desc')->limit(6)->select();
         $newshot2 = D('article')->where('cat_id=17 or cat_id=16')->order('publish_time asc')->limit(3)->select();
        //var_dump($newcat);die;
        //留言分类
        //$liuyan = D('article_cat')->get_infos_pid(10,'sort_order');

         // $down=M('files')->limit(4)->select(); 5 OR 101 OR 102
       $down = D('goods')->get_infos('5 OR 101 OR 102','on_time desc',5);
       $down2 = D('goods')->where('is_hot = 1')->limit(3)->select();
       $liuyan = D('cus_msg')->where('type = 1')->order('time desc')->limit(3)->select();
      //  dump($liuyan);die;
     /*   $xiazai = D('article')->get_info_cat($this->pChild(23),false,'publish_time desc',4);*/
       $ship=D('article')->get_info_cat('33',false,'publish_time desc',4);
        $banner = D('ad')->get_infos_pid('1 and enabled=1','orderby desc');

        $banner2 = D('ad')->where('ad_id=43')->find();
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
            'down' =>$down,
           'tree'=>$tree,
           'ship' =>$ship,
           'newshot2'=>$newshot2,
           'aba' =>$aba,
           'down2'=>$down2
        ];
        $this->assign($data_b);
        
    }    


        public function verify(){
          $config =    array(
            'fontSize'    =>    30,    // 验证码字体大小   
             'length'      =>    3,     // 验证码位数   
              'useNoise'    =>    false, // 关闭验证码杂点

            );
            $Verify = new \Think\Verify($config);

          //$Verify->useImgBg = true; 


              ob_clean();

              $Verify->entry();
    }


    public function download(){
         //接收公文id
    //$id = I('get.fid');
      $path=I('get.qwe');
    //dump($id);die;
    //根据公文id查询对应的附件路径
   /* $data = D('files')->field('file_url')->find($id);
   
     
    $path = DOC_ROOT.$data['file_url'];*/
   $fname=basename($path);
   dump($fname);die;
    //dump($fname);die;

    $test=new \Org\Net\Http();
    $test->Download($path,$fname);
/*    header("Content-type: application/octet-stream");
    header('Content-Disposition: attachment; filename="'. basename($path) .'"');
    header("Content-Length: ". filesize($path));
    readfile($path);*/
                              }






      public function pChild($parent_id){
        //先将父id的下的子id查出来，因为是个二维数组，所以用foreach变为一维数组
     //$sonarr=D('article_cat')->where('parent_id=15')->field(cat_id)->select();

         $sonarr=D('article_cat')->where("parent_id=".$parent_id)->field(cat_id)->select();
            foreach ($sonarr as $k => $v) {
               foreach ($v as $key => $value) {
                  //print_r("$key-----$value");
                $catid[]=$value;
               }
            }
        //用implode()函数将一维数组转为字符串
        $sonstr=implode(' OR cat_id=',$catid);
        return $sonstr;
    }

    /**
     * 保存公告变量到 smarty中 比如 导航 
     */
    /*public function public_assign()
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
    }*/
}