<?php

namespace Qbhy\TtMicroApp\Hyperf;

use Hyperf\Contract\ConfigInterface;
use Qbhy\TtMicroApp\TtMicroApp;
use \Qbhy\TtMicroApp\Factory as BaseFactory;

/**
 * Class Factory
 * @package Qbhy\TtMicroApp
 * @mixin TtMicroApp
 */
class Factory extends BaseFactory
{
    protected $config;

    protected $drivers;

    public function __construct(ConfigInterface $config)
    {
        parent::__construct($config->get('tt-app', []));
    }
}