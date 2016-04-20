<?php


namespace Clooder;


interface MessageInterface
{
    /**
     * @return array
     */
    public function getAttachment();

    /**
     * @param array $attachement
     */
    public function setAttachment(array $attachment = []);

    /**
     * @return string
     */
    public function getSubject();

    /**
     * @param string $subject
     */
    public function setSubject($subject);

    /**
     * @return array
     */
    public function getFrom();

    /**
     * @param array $from
     */
    public function setFrom(array $from = []);

    /**
     * @return array
     */
    public function getTo();

    /**
     * @param array $to
     */
    public function setTo(array $to = []);

    /**
     * @return string|null
     */
    public function getBody();

    /**
     * @param string|null $body
     */
    public function setBody($body = null);

}
