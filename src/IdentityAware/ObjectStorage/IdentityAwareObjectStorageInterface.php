<?php

namespace Xpwales\Identity\IdentityAware\ObjectStorage;

use Xpwales\Identity\IdentityAware\IdentityAwareGetterInterface;

interface IdentityAwareObjectStorageInterface extends \Traversable, \Countable
{
    /**
     * @param IdentityAwareGetterInterface $object
     *
     * @return $this
     */
    public function attach(IdentityAwareGetterInterface $object);

    /**
     * @param IdentityAwareGetterInterface $object
     *
     * @return bool success|no object exists
     */
    public function detach(IdentityAwareGetterInterface $object);

    /**
     * @param IdentityAwareGetterInterface $object
     *
     * @return bool
     */
    public function contains(IdentityAwareGetterInterface $object);

}//end interface