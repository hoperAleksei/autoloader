<?php

namespace ns1\ns12;

class C
{
    private $data;
    public function __construct($data='C')
    {
        $this->data = $data;
    }

    public function __invoke()
    {
        echo $this->data;
    }
}