<?php
/*
 +----------------------------------------------------------------------
 + Title        : Api框架 公共配置文件
 + Author       : 极资源首席工程师 - 小黄牛
 + Version      : V1.0.0.1
 + Initial-Time : 2017-06-26 13:10
 + Last-time    : 2017-06-16 13:20 + 小黄牛
 + Desc         : 框架所有配置参数的初始值都统一方法在这里
 +----------------------------------------------------------------------
*/

return [
	'LOG_TPL'           => LIB_PATH.'Log/Tpl/Error.php', // 错误信息打印地址
	/***********************************************路由参数*********************************************************/
	'URL_SPLIT'         => '/',                          // 默认URL分隔符
	'URL_SUFFIX'        => '.html',                      // 默认URL后缀名
];
