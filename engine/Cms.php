<?php

namespace Engine;



class Cms
{
    /**
     * @var DI
     */
    private $di;

    public $router;

    /**
     * Cms constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }

    /**
     *  Run Cms
     */
    public function run()
    {
        //$this->router->add('home','/','HomeController:index');

         //$routerDispatch = $this->router->dispatch();
         //print_r($this->di);
        print_r($_SERVER);

       
    }
}