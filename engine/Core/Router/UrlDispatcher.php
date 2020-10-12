<?php


namespace Engine\Core\Router;

/**
 * Class UrlDispatcher
 * @package Engine\Core\Router
 */
class UrlDispatcher
{
    /**
     * @var string[]
     */
    private $methods = [
        'POST',
        'GET'

    ];
    /**
     * @var array[]
     */
    private $routes = [
        'POST'=>[],
        'GET'=>[]
    ];
    /**
     * @var string[]
     */
    private $patterns = [
        'int'=>'[0-9]+',
        'str'=>'[a-zA-Z\.\-_%]+',
        'any'=>'[a-zA-Z0-9\.\-_%]+'
    ];

    /**
     * @param $key
     * @param $pattern
     */
    public function addPattern($key, $pattern)
    {
        $this->patterns[$key] = $pattern;
    }
}