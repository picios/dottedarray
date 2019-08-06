<?php

namespace Picios\DottedArray\Test;

use PHPUnit\Framework\TestCase;
use Picios\DottedArray\DottedArray;

class DottedArrayTest extends TestCase
{

    private $array;

    public function setUp(): void
    {
        $this->array = array(
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
    }

    public function testGet()
    {
        $da = new DottedArray($this->array);
        $this->assertEquals(
            'always lack', 
            $da->get('women.cloths')
        );
    }

    public function testSet()
    {
        $da = new DottedArray($this->array);
        $da->set('women.cloths', 'ok');
        $this->assertEquals(
            'ok', 
            $da->get('women.cloths')
        );
    }

}