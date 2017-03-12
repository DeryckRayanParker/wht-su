<?php
/**
 * Created by PhpStorm.
 * User: rostislav
 * Date: 3/8/17
 * Time: 6:33 AM
 */

namespace Wht\Kernel\Routing;


class Router
{
    public $controller = 'main';
    public $action = 'index';

    public function __construct()
    {
        var_dump($_SERVER['REQUEST_URI']);
    }
}