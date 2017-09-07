<?php
/**
 * Created by PhpStorm.
 * User: frowhy
 * Date: 2017/9/7
 * Time: 上午10:50
 */

namespace Frowhy\JPush\Providers;

class LaravelServiceProvider extends AbstractServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $path = __DIR__ . '/config/config.php';

        $this->publishes([$path => config_path('jpush.php')], 'config');
        $this->mergeConfigFrom($path, 'jpush');
    }
}
