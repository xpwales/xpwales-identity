<?php

namespace Xpwales\Identity\IdentityAware\ObjectStorage;

use Xpwales\Identity\IdentityAware\IdentityAwareGetterInterface;
use Xpwales\Identity\Utils\IdentityUtils;

class IdentityAwareObjectStorage implements \IteratorAggregate, IdentityAwareObjectStorageInterface
{
    /**
     * @var array
     */
    private $objects = [];

    /**
     * @inheritdoc
     */
    public function attach(IdentityAwareGetterInterface $object)
    {
        $key                 = IdentityUtils::assembleKey($object->getIdentity());
        $this->objects[$key] = $object;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function detach(IdentityAwareGetterInterface $object)
    {
        $key = IdentityUtils::assembleKey($object->getIdentity());

        if (array_key_exists($key, $this->objects) === true) {
            unset($this->objects[$key]);
            return true;
        }

        return false;
    }

    /**
     * @inheritdoc
     */
    public function count()
    {
        return count($this->objects);
    }

    /**
     * @inheritdoc
     */
    public function getIterator()
    {
        $iterator = new \ArrayIterator($this->objects);

        return $iterator;
    }

}//end class