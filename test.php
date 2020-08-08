<?php

require_once 'vendor/autoload.php';

$hello = new Demo\Hello\HelloWorld;
$hello->hello();

echo '<br>';

$hiMe = new Demo\Hello\HelloWorld('MushuLeDragon');
$hiMe->hello();
