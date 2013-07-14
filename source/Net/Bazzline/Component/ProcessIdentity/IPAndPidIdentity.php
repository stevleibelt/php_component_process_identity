<?php
/**
* @author stev leibelt <artodeto@arcor.de>
* @since 2013-07-11
*/

namespace Net\Bazzline\Component\ProcessIdentity;

/**
 * Class IPAndPidIdentity
 *
 * @package Net\Bazzline\Component\ProcessIdentity
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-11
 */
class IPAndPidIdentity implements IdentityInterface
{
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        return $_SERVER['SERVER_ADDR'] . '_' . getmypid();
    }
}
