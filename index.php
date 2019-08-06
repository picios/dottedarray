<?php

use Picios\DottedArray\DottedArray;

error_reporting(-1);
ini_set('display_errors', -1);

require_once './vendor/autoload.php';

$array = array(
    'women' => array(
        'cloths' => 'always lack',
        'money' => 'never enough',
        'mind' => 'calm',
    ),
    
    'men' => array(
        'cloths' => 'whatever',
        'money' => 'hidden',
        'mind' => 'reckless',
    ),
);

$da = new DottedArray($array);

echo $da->get('women.cloths');