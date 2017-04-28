<?php

namespace App;

class Config
{
    public $config = [
        'db' => [
            'dsn' => 'mysql:host=localhost; dbname=BlogSite',
            'username' => 'root',
            'pass' => ''
        ]
    ];

    private static $instance;

    private function __construct()
    {
    }

    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }


    public function getConfig()
    {
        return $this->config;
    }
}