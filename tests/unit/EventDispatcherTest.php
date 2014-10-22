<?php

namespace Butterfly\Adapter\Sf2EventDispatcher\Tests;

use Butterfly\Adapter\Sf2EventDispatcher\EventDispatcher;

class EventDispatcherTest extends \PHPUnit_Framework_TestCase
{
    public function testAddListenerForObject()
    {
        $listener1 = $this->getListener(1);
        $listener2 = $this->getListener(2);

        $eventDispatcher = new EventDispatcher();

        $eventDispatcher->addListenerForObject('test_name', $listener1, 'method1', 0);
        $eventDispatcher->addListenerForObject('test_name', $listener2, 'method2', 0);

        $expected = array('test_name' => array(
            array($listener1, 'method1'),
            array($listener2, 'method2'),
        ));
        $this->assertEquals($expected, $eventDispatcher->getListeners());
    }

    /**
     * @param mixed $value
     * @return \stdClass
     */
    protected function getListener($value)
    {
        $listener = new \stdClass();

        $listener->value = $value;

        return $listener;
    }
}
