<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

Route::rule('/','home/index/index','GET|POST');
// 同一控制器，路由分组，提高路由匹配的效率
Route::group('index',function(){
	Route::rule('add','home/index/add');
	Route::rule('edit','home/index/edit');
	Route::rule('del/:id$','home/index/del');
},['method'=>'GET|POST']);// ,'ext'=>'html'
// 临时测试路由
Route::rule('test/:name$','index/index/index','GET|POST');
Route::miss(function(){return 404;});// 没匹配到路由时
