<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 25/11/2017
 * Time: 07:05 PM
 */

namespace App;


class Application extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'public_html';
    }
}