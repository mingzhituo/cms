<?php
return array(
	//'配置项'=>'配置值'
	
	   'TMPL_PARSE_STRING'  =>array(
         '[CSS]' => '/Public/Home/css', // css路径
         '[JS]'     => '/Public/Home/js', // js路径
         '[IMG]'     => '/Public/Home/images',//图片路径
         '[PIC]'     => '/Public/Home/picture',//图片路径
         '[INPUT]'     => '/Public/js/input_ajax',//输入验证脚本文件路径
         '[STATIC]'    => '/Public/Home/Static',//static路径
       
    ),
	
	 'URL_ROUTER_ON'   => true, 
        'URL_MODEL' => 2,
       define('BIND_MODULE', 'Home'),
    'URL_PATHINFO_DEPR' => '-',
      
   //路由配置
    //'URL_ROUTER_ON'   => true,
     //'URL_MODEL' => 2,
     //'MULTI_MODULE' => false,
     //'DEFAULT_MODULE'=> 'Home',
     //'MULTI_MODULE'=> false,
    

);