<?php

namespace Xpwales\Identity\Factory;

use Xpwales\Identity\Identity\IdentityInterface;

interface IdentityFactoryInterface
{
    /**
     * @param mixed $values
     *
     * @return IdentityInterface
     */
    public function createIdentity($values=null);

}//end interface