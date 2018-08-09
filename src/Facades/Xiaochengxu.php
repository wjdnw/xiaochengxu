<?php
namespace Wjdnw\Xiaochengxu\Facades;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/9
 * Time: 14:37
 */
use Illuminate\Support\Facades\Facade;

class Xiaochengxu extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'xiaochengxu';
    }
}