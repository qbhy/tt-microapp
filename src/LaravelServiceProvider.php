<?php

namespace Qbhy\TtMicroApp;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use Laravel\Lumen\Application as LumenApplication;

/**
 * Class LaravelServiceProvider
 *
 * @author  qbhy <96qbhy@gmail.com>
 *
 * @package Qbhy\BaiduAIP
 */
class LaravelServiceProvider extends BaseServiceProvider
{
    public function boot()
    {

    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = dirname(__DIR__) . '/config/tt-app.php';
        if ($this->app->runningInConsole()) {
            $this->publishes([$source => base_path('config/tt-app.php')], 'tt-app');
        }

        if ($this->app instanceof LumenApplication) {
            $this->app->configure('tt-app');
        }

        $this->mergeConfigFrom($source, 'tt-app');
    }

    public function register()
    {
        $this->setupConfig();

        $this->app->singleton(TtMicroApp::class, function ($app) {
            return new TtMicroApp(config('tt-app'));
        });

        $this->app->alias(TtMicroApp::class, 'tt.app');
    }
}