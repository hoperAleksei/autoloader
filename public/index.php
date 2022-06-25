<?php

require_once dirname(__DIR__) . '/autoloader.php';

$a = new ns1\A();
$b = new ns1\ns11\B();
$c = new ns1\ns12\C();
$d = new ns2\D();

$a();
$b('B');
$c();
$d();
