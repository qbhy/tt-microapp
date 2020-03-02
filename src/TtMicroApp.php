<?php

namespace Qbhy\TtMicroApp;

use Hanson\Foundation\Foundation;

/**
 * Class TtMicroApp
 * @package Qbhy\TtMicroApp
 *
 * @property-read AccessToken $access_token
 * @property-read HttpClient $http
 */
class TtMicroApp extends Foundation
{
    protected $providers = [
        ServiceProvider::class,
    ];

    public function getAppId()
    {
        return $this->getConfig('access_key');
    }

    public function getAppSecret()
    {
        return $this->getConfig('secret_key');
    }
}