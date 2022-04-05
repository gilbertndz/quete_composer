<?php

require __DIR__ . '/../vendor/autoload.php';
require '../src/Wcs/Hello.php';
require '../composer.json';

use App\Wcs\Hello;

$hello = new Hello();
echo $hello->talk();