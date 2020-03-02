<?php

namespace Qbhy\TtMicroApp;

use Hanson\Foundation\Http;

class HttpClient extends Http
{
    protected $app;

    public function __construct(TtMicroApp $microApp)
    {
        $this->app = $microApp;
    }
}