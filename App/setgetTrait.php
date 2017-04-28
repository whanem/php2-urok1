<?php

namespace App;

trait setgetTrait{

    private $data = [];

    public function __set($prop, $v)
    {
        $this->data[$prop] = $v;
    }

    public function __get($prop)
    {
        return $this->data[$prop];
    }

    public function __isset($prop)
    {
        return isset($this->data[$prop]);
    }
}
