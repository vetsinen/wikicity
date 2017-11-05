<?php

class Storage
{
    private $file_name = 'db.json';
    public $storage = [];

    function __construct()
    {
        $s = file_get_contents($this->file_name);
        if (strlen($s) > 0) {
            $this->storage = json_decode($s, true);
        }
    }
    function save()
    {
        file_put_contents($this->file_name, json_encode($this->storage));
    }

}