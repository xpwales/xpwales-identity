<?php

namespace Xpwales\Identity\Identity;

interface IdentityAwareSetterInterface
{
    /**
     * @param IdentityInterface $identity
     *
     * @return $this
     */
    public function setIdentity(IdentityInterface $identity);

}//end interface