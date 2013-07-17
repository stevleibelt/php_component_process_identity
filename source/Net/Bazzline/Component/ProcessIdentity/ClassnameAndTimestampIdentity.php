<?php
/**
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-11
 */

namespace Net\Bazzline\Component\ProcessIdentity;

/**
 * Class ClassnameAndTimestampIdentity
 *
 * @package Net\Bazzline\Component\ProcessIdentity
 * @author stev leibelt <artodeto@arcor.de>
 * @since 2013-07-11
 */
class ClassnameAndTimestampIdentity extends Identity
{
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $this->id = get_class($this) . '_' . time();
        }

        return $this->id;
    }
}