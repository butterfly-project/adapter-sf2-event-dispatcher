<?php

namespace Butterfly\Tests;

class ServicesTest extends BaseDiTest
{
    public function getDataForTestParameter()
    {
        return array(
            array('bfy_adapter.event_dispatcher.handlers', array()),
        );
    }

    public function getDataForTestService()
    {
        return array(
            array('bfy_adapter.event_dispatcher'),
        );
    }

    /**
     * @dataProvider getDataForTestParameter
     * @param string $parameterName
     * @param mixed $expectedValue
     */
    public function testParameter($parameterName, $expectedValue)
    {
        $this->assertEquals($expectedValue, self::$container->getParameter($parameterName));
    }

    /**
     * @dataProvider getDataForTestService
     * @param string $serviceName
     */
    public function testService($serviceName)
    {
        self::$container->get($serviceName);
    }
}
