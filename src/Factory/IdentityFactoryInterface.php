<?php

namespace Xpwales\Identity\Factory;

use Xpwales\Identity\Identity\IdentityInterface;

interface IdentityFactoryInterface
{
    /**
     * @return IdentityInterface
     */
    public function createIdentity();

}//end interface