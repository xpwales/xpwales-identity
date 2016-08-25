<?php

namespace Xpwales\Identity\IdentityAware;

use Xpwales\Identity\Identity\IdentityInterface;

interface IdentityAwareSetterInterface
{
    /**
     * @param IdentityInterface $identity
     *
     * @return $this
     */
    public function setIdentity(IdentityInterface $identity);

}//end interface