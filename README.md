
# DottedArray

Gets and sets an array node using a dot notation.
It gives a convenient access to an array elements.
Particularly recommended for config arrays.

## Usage

``` php

use Picios\DottedArray\DottedArray;

require_once __DIR__ . '/vendor/autoload.php';

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

$dottedArray = new DottedArray($array);
echo $dottedArray->get('women.cloths');

$dottedArray->set('women.cloths', 'ok');
echo $dottedArray->get('women.cloths');
```

Also can be used with globals, like $_SESSION

``` php
$session = new \Picios\DottedArray\DottedArray($_SESSION);
echo $session->get('user.name');
```

## Testing
```
sudo phpunit test --bootstrap vendor/autoload.php
```
## Homepage

You can read more at [Picios.pl](http://picios.pl/php-dotted-array/)