<?php


namespace Bermuda\Identity;


/**
 * Interface IdGeneratorInterface
 * @package Bermuda\Identity
 */
interface IdGeneratorInterface
{
    /**
     * @param object $object
     * @return string|null
     */
    public function generate(object $object):? string ;
}
