<?php
//自定义辅助函数文件
function route_class()
{
    return str_replace('.', '_', Route::currentRouteName());
}
