<?php

namespace Xpwales\Identity\Identity;

interface IdentityAwareGetterInterface
{
    /**
     * @return IdentityInterface
     */
    public function getIdentity();

}//end interface