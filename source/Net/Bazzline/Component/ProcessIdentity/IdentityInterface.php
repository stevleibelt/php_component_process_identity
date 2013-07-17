<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-11
 */

namespace Net\Bazzline\Component\ProcessIdentity;

/**
 * Class IdentityInterface
 *
 * @package Net\Bazzline\Component\ProcessIdentity
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-11
 */
interface IdentityInterface
{
    /**
     * @return string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-11
     */
    public function getId();

    /**
     * @param string $id
     * @return $this
     * @throws \RuntimeException - if you try to set a id that already exists
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    public function setId($id);
}
