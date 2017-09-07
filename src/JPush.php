<?php
/**
 * Created by PhpStorm.
 * User: frowhy
 * Date: 2017/9/7
 * Time: 上午11:07
 */

namespace Frowhy\JPush;

class JPush
{
    public function __construct(string $app_key, string $master_secret)
    {
        return new \JPush($app_key, $master_secret);
    }
}