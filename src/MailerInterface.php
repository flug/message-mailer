<?php

namespace Clooder;

interface MailerInterface
{
    /**
     * @param MessageInterface $message
     * @return void|boolean
     */
    public function send(MessageInterface $message);
}
