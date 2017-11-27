<?php
/**
 * Created by PhpStorm.
 * User: Diego
 * Date: 27/11/2017
 * Time: 06:18 AM
 */

namespace App;


class Application extends \Illuminate\Foundation\Application
{
    public function publicPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'public_html';
    }
}