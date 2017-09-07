<?php
/**
 * Created by PhpStorm.
 * User: frowhy
 * Date: 2017/9/7
 * Time: 上午10:50
 */

namespace Frowhy\JPush\Facades;

use Illuminate\Support\Facades\Facade;

class JPushFactory extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'frowhy.jpush';
    }
}