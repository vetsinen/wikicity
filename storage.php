<?php

class Storage
{
    private static $file_name = 'db.json';
    public static $storage = [];

    public static function init()
    {
        $s = file_get_contents(self::$file_name);
        if (strlen($s) > 0) {
            self::$storage = json_decode($s, true);
        }
    }

    function __construct()
    {
        $s = file_get_contents(self::$file_name);
        if (strlen($s) > 0) {
            self::$storage = json_decode($s, true);
        }
    }

    function save()
    {
        file_put_contents(self::$file_name, json_encode(self::$storage));
    }

}