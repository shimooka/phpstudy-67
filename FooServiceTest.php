<?php
class FooServiceTest extends PHPUnit_Framework_TestCase
{
    public function testFoo()
    {
        $dependency = $this->getMock('DependencyService');
        $service = new FooService($dependency);
        $dependency->expects($this->once())->method('doSomething');
        $value = $service->perform();
        $this->assertEquals(42, $value);
    }
}
