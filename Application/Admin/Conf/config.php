<?php
return array(
	//'配置项'=>'配置值'
     'URL_HTML_SUFFIX'       =>  '',  // URL伪静态后缀设置
     //'SHOW_PAGE_TRACE' =>true,
    // 'OUTPUT_ENCODE' =>  true, //页面压缩输出支持   配置了 没鸟用
    'PAYMENT_PLUGIN_PATH' =>  PLUGIN_PATH.'files',
    'LOGIN_PLUGIN_PATH' =>  PLUGIN_PATH.'login',
    'SHIPPING_PLUGIN_PATH' => PLUGIN_PATH.'shipping',
    // 'FUNCTION_PLUGIN_PATH' => PLUGIN_PATH.'function',
	
	'CFG_SQL_FILESIZE'=>5242880,
    
    //'URL_MODEL'=>1, // 
    //默认错误跳转对应的模板文件
    // 'TMPL_ACTION_ERROR' => 'Public:dispatch_jump',
    //默认成功跳转对应的模板文件
    // 'TMPL_ACTION_SUCCESS' => 'Public:dispatch_jump',
);