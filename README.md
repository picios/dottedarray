# Dotted Array

Gets or Sets array node using a dot notation.
It gives a convenient access to array elements.
Particularly recommended for config arrays.

Sample code:

``` php
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

require_once 'DottedArray.php';
$dottedArray = new Picios\Lib\DottedArray($array);
echo $dottedArray->get('women.clothss');
```

Also can be used with globals, like $_SESSION

``` php
$session = new Picios\Lib\DottedArray($array);
echo $session->get('user.name');
```
