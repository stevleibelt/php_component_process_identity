<?php
/**
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-07-17 
 */

namespace Net\Bazzline\Component\ProcessIdentity;

use RuntimeException;

/**
 * Class Identity
 *
 * @package Net\Bazzline\Component\ProcessIdentity
 * @author stev leibelt <artodeto@bazzline.net>
 * @since 2013-07-17
 */
class Identity implements IdentityInterface
{
    /**
     * @var string
     * @author stev leibelt <artodeto@bazzline.net>
     * @since 2013-07-17
     */
    protected $id;

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        if (is_null($this->id)) {
            $this->setId($_SERVER['SERVER_ADDR'] . '_' . getmypid());
        }

        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function setId($id)
    {
        if (!is_null($this->id)) {
            throw new RuntimeException(
                'Id already set'
            );
        }
        $this->id = $id;

        return $this;
    }
}