<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-17 
 */

namespace Net\Bazzline\Component\ProcessIdentity;

/**
 * Class IdentityAbstract
 *
 * @package Net\Bazzline\Component\ProcessIdentity
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-17
 */
abstract class IdentityAbstract implements IdentityInterface
{
    /**
     * @var string
     * @author stev leibelt <artodeto@arcor.de>
     * @since 2013-07-17
     */
    protected $id;

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }
}