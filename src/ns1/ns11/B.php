<?php

namespace ns1\ns11;

class B
{
    private $data;
    public function __construct($data='B')
    {
        $this->data = $data;
    }

    public function __invoke($data)
    {
        echo $this->data;
    }
}