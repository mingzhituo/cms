<?php
return array(
    /* 加载公共函数 */
    'LOAD_EXT_FILE' =>'common',

    //'SHOW_PAGE_TRACE' =>true,
        
    //路由配置
    //'URL_ROUTER_ON'   => true, 
     //'URL_MODEL' => 2,
    //'URL_PATHINFO_DEPR' => '_',
      //'DEFAULT_MODULE'=> 'Home',
     //'MULTI_MODULE'=> false,

    //'MULTI_MODULE' => false,
     

    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'tyzscq',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '3306',        // 端口
    'DB_PREFIX'             =>  'test_',    // 数据库表前缀
    'URL_CASE_INSENSITIVE'  =>   true,
    //伪静态配置
   	'URL_HTML_SUFFIX'=>'html|shtml|xml|asp', 
    //模糊查询设置
    'DB_LIKE_FIELDS'=>'title|content',

    'THINK_EMAIL' => array(

    'SMTP_HOST' => 'smtp.163.com', //SMTP服务器

    'SMTP_PORT' => '25', //SMTP服务器端口

    'SMTP_USER' => '', //SMTP服务器用户名

    'SMTP_PASS' => '', //SMTP服务器密码

    'FROM_EMAIL' => '163.com',

    'FROM_NAME' => '', //发件人名称

    'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）

    'REPLY_NAME' => '', //回复名称（留空则为发件人名称）

    'SESSION_EXPIRE'=>'72',
    'TMPL_DENY_PHP' =>false,


    ), 
	
	 'MODULE_ALLOW_LIST' => array (
                'Home',
                'Admin',
        ),
        'DEFAULT_MODULE' => 'Home',

     
    



    );