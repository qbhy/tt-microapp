<?php

namespace Qbhy\TtMicroApp;

class Auth
{
    protected $app;

    public function __construct(TtMicroApp $microApp)
    {
        $this->app = $microApp;
    }

    /**
     * @param string $code
     * @param string $type code或者anonymous_code
     * @return array
     * @throws
     */
    public function session(string $code, $type = 'code')
    {
        if (!in_array($type, ['code','anonymous_code'])) {
            throw new TtMicroAppException('type 只能是 code或者anonymous_code');
        }

        return json_decode((string)$this->app->http->get('https://developer.toutiao.com/api/apps/jscode2session', [
            'appid' => $this->app->getAppId(),
            'secret' => $this->app->getAppSecret(),
            $type => $code,
        ])->getBody(), true);
    }

}