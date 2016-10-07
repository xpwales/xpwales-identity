<?php

namespace Xpwales\Identity\Factory;

use Xpwales\Identity\Factory\Exception;

trait IdentityFactoryAwareTrait
{
    /**
     * @var IdentityFactoryInterface
     */
    private $identityFactory = null;

    /**
     * @see IdentityFactoryAwareInterface
     *
     * @param IdentityFactoryInterface $identityFactory
     *
     * @return $this
     */
    public function setIdentityFactory(IdentityFactoryInterface $identityFactory)
    {
        $this->identityFactory = $identityFactory;

        return $this;
    }

    /**
     * @see IdentityFactoryAwareInterface
     *
     * @throws Exception\RuntimeException on unset identity factory
     *
     * @return IdentityFactoryInterface
     */
    public function getIdentityFactory()
    {
        if (null === $this->identityFactory) {
            $msg = sprintf(
                'Identity factory must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }

        return $this->identityFactory;
    }

}//end trait