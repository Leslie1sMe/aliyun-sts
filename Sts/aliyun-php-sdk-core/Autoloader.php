<?php
/**
 * Created by PhpStorm.
 * User: leslie
 * Date: 2018/8/24
 * Time: 16:29
 */
namespace Leslie\Sts\Core;

class Autoloader {
    public static function config()
    {
        /**
         * include config.php
         */
        if (!defined("STS_PATH")) {
            define("STS_PATH", dirname(__FILE__) . '/');
        }
        include( STS_PATH . 'Config.php');
    }
}