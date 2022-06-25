<?php

namespace ns2;

class D
{
    private $data;
    public function __construct($data='D')
    {
        $this->data = $data;
    }

    public function __invoke()
    {
        echo $this->data;
    }
}