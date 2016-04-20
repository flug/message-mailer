<?php


class MessageInterfaceTest extends PHPUnit_Framework_TestCase
{
    public function testInstanceOf()
    {
        $mock = $this->getMock('\Clooder\MessageInterface');
        $this->assertTrue($mock instanceof \Clooder\MessageInterface);
    }

    public function testPopulateClass()
    {
        $messageInterfaceMock = $this->getMock('\Clooder\MessageInterface');
        $messageInterfaceMock->setAttachment([
            'file.jpg'
        ]);

        $messageInterfaceMock->setBody('This is a test');
        $messageInterfaceMock->setFrom([
            'Postmaster Test' => "postmaster@test.com"
        ]);

        $messageInterfaceMock->setTo([
            'Recipient Test' => 'recipient@test.com'
        ]);

        $messageInterfaceMock->setSubject('This is a mock test');
    }
}