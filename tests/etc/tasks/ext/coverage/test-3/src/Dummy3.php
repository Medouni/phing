<?php

class Dummy3
{
    /** @var mixed */
    private $arg;

    public function __construct($arg)
    {
        $this->arg = $arg;
    }

    public function result()
    {
        return $this->arg;
    }
}
