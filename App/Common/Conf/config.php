<?php
return array(
    //'配置项'=>'配置值'
    // /* 数据库设置 */
    // 'DB_TYPE'       => 'mysql',
    // 'DB_HOST'       => '127.0.0.1',
    // 'DB_NAME'       => 'hlyxl.com',
    // 'DB_USER'       => 'root',
    // 'DB_PWD'        => 'root',
    // 'DB_PREFIX'     => 'szd_',
    
    'DB_TYPE'       => 'mysql',
    'DB_HOST'       => 'localhost',
    'DB_NAME'       => 'www.macauonline.net',
    'DB_USER'       => 'www.macauonline.net',
    'DB_PWD'        => 'BmThZhhSx2TLYn2H',
    'DB_PREFIX'     => 'arm_',
    'app_debug'     => false,

    // 显示页面Trace信息
    // 'SHOW_PAGE_TRACE'        => true,
    'URL_MODEL'             => 1,
    //默认模块
    'DEFAULT_MODULE' => 'Home',
    'MODULE_ALLOW_LIST' => array('Home','Admin'),

    //公共类库目录
    'AUTOLOAD_NAMESPACE'    => array('Lib' => APP_PATH . 'Lib'),


     /* 
     * 路由开启和匹配。首先开启路由匹配，然后根据相应的路由规则进行匹配
     * 1、静态路由
     * 2、动态路由
     * 3、动静态结合路由
     * 4、正则路由 
     */
    'URL_ROUTER_ON'   => true, //开启路由
    'URL_ROUTE_RULES' => array( //定义路由规则
        // 'Index/:name'    => 'Index/index',          
        // 'Event/store'    => array('Event/store',array('method'=>'post')),
        // 'Event/store'    => array('Event/store',array('method'=>'post')),
        array('api/index', 'WechatApi/Api/index', '', array('method' => 'GET')),
        array('api/lists', 'WechatApi/Api/lists', '', array('method' => 'GET')),
        array('api/detail', 'WechatApi/Api/detail', '', array('method' => 'GET')),
        array('api/search', 'WechatApi/Api/search', '', array('method' => 'GET')),
        array('api/banner', 'WechatApi/Api/banner', '', array('method' => 'GET')),
        array('api/send_mail', 'WechatApi/Api/send_mail', '', array('method' => 'GET')),
    ),

    'URL_PARAMS_BIND'     =>  true, // URL变量绑定到操作方法作为参数


    /*文件路径*/
    'TMPL_PARSE_STRING'   =>  array(
        '__PUBLIC__'      => __ROOT__.'/Public/Static/Admin/',
        '__HOME_PUBLIC__' => __ROOT__.'/Public/Static/Home/',
        '__PUBLIC_PATH__' => __ROOT__.'/Public/',
    ),

    //404页面
    // 'TMPL_EXCEPTION_FILE' => './App/Home/View/Error/404.html',
    // 'ERROR_PAGE'            =>  './App/Home/View/Error/404.html',


    //中英文切换语言包配置项
    'LANG_SWITCH_ON'     =>     true,    //开启语言包功能        
    'LANG_AUTO_DETECT'     =>     true, // 自动侦测语言
    'DEFAULT_LANG'         =>     'zh-tw', // 默认语言        
    'LANG_LIST'            =>    'zh-tw,en-us', //必须写可允许的语言列表
    'VAR_LANGUAGE'     => 'l', // 默认语言切换变量

    'TOKEN_ON'      =>    true,  // 是否开启令牌验证 默认关闭
    'TOKEN_NAME'    =>    '__hash__',    // 令牌验证的表单隐藏字段名称，默认为__hash__
    'TOKEN_TYPE'    =>    'md5',  //令牌哈希验证规则 默认为MD5
    'TOKEN_RESET'   =>    true,  //令牌验证出错后是否重置令牌 默认为true


    'MAIL_SMTP'            =>  TRUE,
    'MAIL_HOST'            =>  'smtp.qq.com',            //邮件发送SMTP服务器
    'MAIL_SMTPAUTH'        =>  TRUE,
    'MAIL_USERNAME'        =>  '953987715@qq.com',       //SMTP服务器登陆用户名
    'MAIL_PASSWORD'        =>  'dcfwnwqppfyhbehb',       //SMTP服务器登陆密码
    'MAIL_SECURE'          =>  'ssl',
    'MAIL_CHARSET'         =>  'utf-8',
    'MAIL_ISHTML'          =>  TRUE,
    'MAIL_FROMNAME'        =>  'GMS',


);
