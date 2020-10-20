<?php

require __DIR__.'/../vendor/autoload.php';

$hello = new App\Wcs\Hello();

var_dump($hello);

echo $hello->talk();