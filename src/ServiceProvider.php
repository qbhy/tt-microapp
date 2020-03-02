<?php

namespace Qbhy\TtMicroApp;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['access_token'] = function (TtMicroApp $microApp) {
            return new AccessToken($microApp);
        };

        $pimple['http'] = function (TtMicroApp $microApp) {
            return new HttpClient($microApp);
        };
    }
}