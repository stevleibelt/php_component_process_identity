<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-17 
 */

namespace Test\Net\Bazzline\Component\ProcessIdentity;

use Net\Bazzline\Component\ProcessIdentity\ClassnameAndTimestampIdentity;
use PHPUnit_Framework_TestCase;

class ClassnameAndTimestampIdentityTest extends PHPUnit_Framework_TestCase
{
    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    public function testGetId()
    {
        $identity = $this->getNewIdentity();
        $expectedId = 'Net\Bazzline\Component\ProcessIdentity\ClassnameAndTimestampIdentity_' . time();

        $this->assertEquals($expectedId, $identity->getId());
    }

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    public function testSetAndGetId()
    {
        $identity = $this->getNewIdentity();
        $id = 'exampleId';

        $this->assertEquals($identity, $identity->setId($id));
        $this->assertEquals($id, $identity->getId());
    }

    /**
     * @return ClassnameAndTimestampIdentity()
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    private function getNewIdentity()
    {
        return new ClassnameAndTimestampIdentity();
    }
}
