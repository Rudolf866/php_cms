<?php


namespace Engine\Service\Router;


use Engine\Core\Router\Router;
use Engine\Service\AbstractProvider;

class Provider extends AbstractProvider
{
    /**
     * @var string
     */
    public $serviceName = 'router';

    /**
     * @return mixed|void
     */
    public function init()
    {
        // TODO: Implement init() method.
        $router = new Router('http://cms.log/');

        $this->di->set($this->serviceName, $router);
    }
}


