<?php
/**
 * Created by PhpStorm.
 * User: frowhy
 * Date: 2017/9/7
 * Time: 上午11:07
 */

namespace Frowhy\JPush;


use JPush\Client;

class JPush
{
    private $app_key;
    private $master_secret;
    private $JPush;

    public function __construct(string $app_key, string $master_secret)
    {
        $this->app_key       = $app_key;
        $this->master_secret = $master_secret;
    }

    /**
     * @return Client
     */
    public function getInstance()
    {
        if ($this->JPush === null) {
            $this->JPush = new Client($this->app_key, $this->master_secret);
        } else {
            $this->JPush;
        }

        return $this->JPush;
    }
}