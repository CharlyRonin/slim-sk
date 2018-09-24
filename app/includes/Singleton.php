<?php
/**
 * Created by PhpStorm.
 * User: Carlos
 * Date: 02/09/2018
 * Time: 05:21 PM
 */

namespace App\Includes;


abstract class Singleton
{

    private static $instance;

    private function __construct() { }

    // Singleton instance

    /**
     * @return Singleton
     */
    public static function getInstance()
    {
        if (!isset( self::$instance )) {
            $myClass = __CLASS__;
            self::$instance = new $myClass;
        }
        return self::$instance;
    }

    public function __clone() { trigger_error("Clone of this class is forbidden"); }

}