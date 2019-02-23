<?php
/**
 * Created by PhpStorm.
 * User: Marc Yin
 * Date: 2019-02-23
 * Time: 18:24
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}