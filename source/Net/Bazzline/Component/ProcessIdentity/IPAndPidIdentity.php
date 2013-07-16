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
class IPAndPidIdentity extends IdentityAbstract
{
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $this->id = $_SERVER['SERVER_ADDR'] . '_' . getmypid();
        }

        return $this->id;
    }
}
