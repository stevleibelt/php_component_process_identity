<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-17 
 */

namespace Test\Net\Bazzline\Component\ProcessIdentity;

use Net\Bazzline\Component\ProcessIdentity\Identity;
use PHPUnit_Framework_TestCase;

/**
 * Class IdentityTest
 *
 * @package Test\Net\Bazzline\Component\ProcessIdentity
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-17
 */
class IdentityTest extends PHPUnit_Framework_TestCase
{
    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    protected function setUp()
    {
        $_SERVER['SERVER_ADDR'] = '123.456.789.012';
    }

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    protected function tearDown()
    {
        unset($_SERVER['SERVER_ADDR']);
    }

    /**
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    public function testGetId()
    {
        $identity = $this->getNewIdentity();
        $expectedId = $_SERVER['SERVER_ADDR'] . '_' . getmypid();

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
     * @return IPAndPidIdentity
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    private function getNewIdentity()
    {
        return new Identity();
    }
}