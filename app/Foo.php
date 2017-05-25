<?php
/**
 * Created by PhpStorm.
 * User: wen.xiang
 * Date: 2017/5/25
 * Time: 上午10:49
 */

namespace App;


class Foo
{
    public $app;

    public function __construct($app)
    {
        $this->app = $app;
    }

    public function show()
    {
        echo "Foo::show";
    }
}