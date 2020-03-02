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

        $pimple['auth'] = function (TtMicroApp $microApp) {
            return new Auth($microApp);
        };

        $pimple['storage'] = function (TtMicroApp $microApp) {
            return new Storage($microApp);
        };

        $pimple['qr_code'] = function (TtMicroApp $microApp) {
            return new QrCode($microApp);
        };
    }
}