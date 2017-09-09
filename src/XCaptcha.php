<?php namespace Xiaohuilam\XCaptcha;

use Illuminate\Support\ServiceProvider;

/**
 * XCaptcha main class
 */
class XCaptcha extends ServiceProvider{

    /**
     * 执行服务的注册后启动。
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Route/routes.php');
    }
}
