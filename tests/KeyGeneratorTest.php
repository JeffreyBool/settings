<?php

use Mockery as m;
use PHPUnit\Framework\TestCase;
class KeyGeneratorTest extends TestCase
{
    public function tearDown():void
    {
        m::close();
    }

    public function testGenerateCallsSerializer()
    {
        $context = new \JeffreyBool\Settings\Context();

        $serializer = $this->getContextSerializerMock();
        $serializer->shouldReceive('serialize')->with($context)->andReturn('serialized');

        $generator = new \JeffreyBool\Settings\KeyGenerators\KeyGenerator($serializer);

        $this->assertEquals(md5('keyserialized'), $generator->generate('key', $context));
    }

    protected function getContextSerializerMock()
    {
        return m::mock('JeffreyBool\Settings\Contracts\ContextSerializer');
    }
}
