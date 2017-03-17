<?php

/**
 * Dotted Array
 * Gets or Sets array node using a dot notation.
 * It gives a convenient access to array elements.
 * Particularly recommended for config arrays.
 * 
 * @version 1.0.1
 * @author Picios
 * @copyright (c) 2017, Picios
 * @link pcios.pl website
 * @link https://github.com/picios/dottedarray github repository
 * @license https://github.com/github/hubot/blob/master/LICENSE.md MIT License
 */

namespace Picios\Lib;

class DottedArray
{

	/**
	 *
	 * @var array 
	 */
	private $array = array();
	
	/**
	 * 
	 * @param array $array
	 */
	public function __construct($array)
	{
		$this->array = $array;
	}

	/**
	 * 
	 * @param string $key
	 * @param mix $value
	 */
	public function set($key, $value = true)
	{
		$reference = & $this->getReference($key, true);
		$reference = $value;
	}

	/**
	 * 
	 * @param string $key
	 * @return mix
	 */
	public function &get($key = false)
	{
		if (!$key) {
			return $this->array;
		}
		return $this->getReference($key);
	}

	/**
	 * 
	 * @param string $key
	 * @return boolean
	 */
	public function delete($key)
	{
		$keys = explode('.', $key);
		if (count($keys) < 2) {
			unset($this->array[$keys[0]]);
			return true;
		}
		$lastKeyToDelete = array_pop($keys);
		$longKey = implode('.', $keys);
		$reference = & $this->getReference($longKey);
		unset($reference[$lastKeyToDelete]);
	}

	/**
	 * 
	 * @param string $key
	 * @param boolead $forWritting
	 * @return mix
	 */
	protected function &getReference($key, $forWritting = false)
	{
		$keys = explode('.', $key);
		$reference = & $this->array;
		foreach ($keys as $levelKey) {
			if ($forWritting || isset($reference[$levelKey])) {
				$reference = & $reference[$levelKey];
			} else {
				$result = null;
				return $result;
			}
		}

		return $reference;
	}

}


