<?php


class MailerInterfaceTest extends PHPUnit_Framework_TestCase
{

    public function testInstanceOf()
    {
        $mock = $this->getMock('\Clooder\MailerInterface');
        $this->assertTrue($mock instanceof \Clooder\MailerInterface);
    }

    public function testSend()
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
        $mailerInterfaceMock = $this->getMock('\Clooder\MailerInterface');
        $mailerInterfaceMock->method('send')->will($this->returnValue(true));
    }
}