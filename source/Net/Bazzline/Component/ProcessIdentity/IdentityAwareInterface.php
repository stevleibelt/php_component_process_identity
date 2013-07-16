<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-17 
 */

namespace Net\Bazzline\Component\ProcessIdentity;

/**
 * Class IdentityAwareInterface
 *
 * @package Net\Bazzline\Component\ProcessIdentity
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-17
 */
interface IdentityAwareInterface
{
    /**
     * @return IdentityInterface
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    public function getIdentity();

    /**
     * @param IdentityInterface $identity
     * @return $this
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    public function setIdentity(IdentityInterface $identity);
}