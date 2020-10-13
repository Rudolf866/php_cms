<?php


namespace Engine\Core\Router;


class DispachedRoute
{
        private $controller;
        private $parameters;

    /**
     * DispachedRoute constructor.
     * @param $controller
     * @param array $parameters
     */
        public function __construct($controller,$parameters=[])
        {
            $this->controller = $controller;
            $this->parameters = $parameters;
        }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return array|mixed
     */
    public function getParameters()
    {
        return $this->parameters;
    }
}