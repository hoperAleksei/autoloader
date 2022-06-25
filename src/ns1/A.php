<?php

namespace ns1;

class A
{
    private $data;
    public function __construct($data='A')
    {
        $this->data = $data;
    }

    public function __invoke()
    {
        echo $this->data;
    }
}