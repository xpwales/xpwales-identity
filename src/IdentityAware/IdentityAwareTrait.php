<?php

namespace Xpwales\Identity\IdentityAware;

use Xpwales\Identity\IdentityAware\Exception;
use Xpwales\Identity\Identity\IdentityInterface;

trait IdentityAwareTrait
{
    /**
     * @var IdentityInterface
     */
    private $identity = null;

    /**
     * @param IdentityInterface $identity
     *
     * @return $this
     *
     * @see IdentityAwareSetterInterface
     */
    public function setIdentity(IdentityInterface $identity)
    {
        $this->identity = $identity;
        
        return $this;
    }

    /**
     * @throws Exception\RuntimeException on unset identity
     *
     * @return IdentityInterface
     *
     * @see IdentityAwareGetterInterface
     */
    public function getIdentity()
    {
        if (null === $this->identity) {
            $msg = sprintf(
                'Identity must be set before access in %s',
                __CLASS__
            );

            throw new Exception\RuntimeException($msg);
        }
        
        return $this->identity;
    }
    
}//end trait