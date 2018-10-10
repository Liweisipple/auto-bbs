<?php
/**
 * Created by PhpStorm.
 * User: n
 * Date: 2018/9/12
 * Time: 下午3:39
 */

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}