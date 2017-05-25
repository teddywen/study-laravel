<?php

/**
 * Created by PhpStorm.
 * User: wen.xiang
 * Date: 2017/5/25
 * Time: 下午5:49
 */
namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;

class HelloController extends Controller
{
    /**
     * @param $id
     * @param $name
     * @param $age
     * @return string
     */
    public function show($id, $name, $age)
    {
        return "id {$id}, name {$name}, age {$age}";
    }
}