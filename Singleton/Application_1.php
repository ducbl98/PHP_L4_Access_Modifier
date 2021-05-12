<?php


class Application_1
{
    private static Application_1 $instance;

    /**
     * Application_1 constructor.
     */
    private function __construct()
    {
    }

    /**
     * @return Application_1
     */
    public static function getInstance(): Application_1
    {
        if (self::$instance==null){
            self::$instance=new Application_1();
        }
        return self::$instance;
    }

}