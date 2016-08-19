<?php
require __DIR__ . '/vendor/autoload.php';

use Katzefudder\Greeting;

$greeting = new Greeting($argv[1]);