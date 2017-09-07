<?php
/**
 * Created by PhpStorm.
 * User: frowhy
 * Date: 2017/9/7
 * Time: 上午10:50
 */

namespace Frowhy\JPush\Providers;

use Frowhy\JPush\Factory;
use Illuminate\Support\ServiceProvider;

abstract class AbstractServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    abstract public function boot();

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerAliases();

        $this->registerJPush();
    }

    /**
     * Bind some aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
        $this->app->alias('frowhy.jpush', Factory::class);
    }

    /**
     * Register the bindings for the main JWT class.
     *
     * @return void
     */
    protected function registerJPush()
    {
        $this->app->singleton('frowhy.jpush', function () {
            return new Factory(
                $this->config('app_key'),
                $this->config('master_secret')
            );
        });
    }

    /**
     * Helper to get the config values.
     *
     * @param  string $key
     * @param  string $default
     *
     * @return mixed
     */
    protected function config($key, $default = null)
    {
        return config("jpush.$key", $default);
    }

    /**
     * Get an instantiable configuration instance.
     *
     * @param  string $key
     *
     * @return mixed
     */
    protected function getConfigInstance($key)
    {
        $instance = $this->config($key);

        if (is_string($instance)) {
            return $this->app->make($instance);
        }

        return $instance;
    }
}
