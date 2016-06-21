<?php

namespace Xpwales\Identity\ObjectStorage;

use Xpwales\Identity\Identity\IdentityAwareGetterInterface;

interface IdentityAwareObjectStorageInterface
    extends \Countable, \Traversable
{
    /**
     * @param IdentityAwareGetterInterface $object
     *
     * @return void
     */
    public function attach(IdentityAwareGetterInterface $object);

    /**
     * @param IdentityAwareGetterInterface $object
     *
     * @return void
     */
    public function detach(IdentityAwareGetterInterface $object);

    /**
     * @param IdentityAwareGetterInterface $object
     *
     * @return bool
     */
    public function contains(IdentityAwareGetterInterface $object);

}//end interface