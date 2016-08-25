<?php

namespace Xpwales\Identity\IdentityAware;

use Xpwales\Identity\Identity\IdentityInterface;

interface IdentityAwareGetterInterface
{
    /**
     * @return IdentityInterface
     */
    public function getIdentity();

}//end interface