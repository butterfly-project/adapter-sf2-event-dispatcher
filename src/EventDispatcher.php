<?php

namespace Butterfly\Adapter\Sf2EventDispatcher;

use Symfony\Component\EventDispatcher\EventDispatcher as BaseEventDispatcher;

class EventDispatcher extends BaseEventDispatcher
{
    /**
     * @param string $eventName
     * @param Object $listenerObject
     * @param string $listenerMethod
     * @param int $priority
     */
    public function addListenerForObject($eventName, $listenerObject, $listenerMethod, $priority = 0)
    {
        $this->addListener($eventName, array($listenerObject, $listenerMethod), $priority);
    }
}
