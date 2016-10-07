<?php

namespace Xpwales\Identity\Factory;

interface IdentityFactoryAwareInterface
{
    /**
     * @param IdentityFactoryInterface $identityFactory
     *
     * @return $this
     */
    public function setIdentityFactory(IdentityFactoryInterface $identityFactory);

    /**
     * @return IdentityFactoryInterface
     */
    public function getIdentityFactory();

}//end interface