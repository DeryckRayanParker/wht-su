<?php
/**
 * Created by PhpStorm.
 * User: rostislav
 * Date: 3/8/17
 * Time: 6:31 AM
 */

namespace Wht\App;

use Wht\Kernel\Routing\Router;


class Application
{
    public $router;

    public function __construct()
    {
        $router = new Router();
    }

    public function run()
    {
        echo 'RUN';
    }
}