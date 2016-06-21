<?php

namespace Xpwales\Identity\ObjectStorage;

use Xpwales\Identity\Identity\IdentityAwareGetterInterface;
use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\Identity\Utils\IdentityUtils;

class IdentityAwareObjectStorage
    implements  \IteratorAggregate,
                IdentityAwareObjectStorageInterface
{
    /**
     * @var array
     */
    private $objects = [];

    /**
     * @var bool
     */
    private $useDomainspace = true;

    //
    // Domainspace use
    //

    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setUseDomainspace($flag)
    {
        $flag                 = (bool) $flag;
        $this->useDomainspace = $flag;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function attach(IdentityAwareGetterInterface $object)
    {
        $idKey                 = $this->assembleIdKey($object);
        $this->objects[$idKey] = $object;
    }

    /**
     * @inheritdoc
     */
    public function detach(IdentityAwareGetterInterface $object)
    {
        if ($this->contains($object) === false) {
            return null;
        }

        $idKey = $this->assembleIdKey($object);

        unset($this->objects[$idKey]);
    }

    /**
     * @inheritdoc
     */
    public function contains(IdentityAwareGetterInterface $object)
    {
        $idKey = $this->assembleIdKey($object);

        return array_key_exists($idKey, $this->objects);
    }

    /**0
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

    /**
     * @param IdentityAwareGetterInterface $object
     *
     * @return string
     */
    private function assembleIdKey(IdentityAwareGetterInterface $object)
    {
        $identity = $object->getIdentity();

        return IdentityUtils::assembleIdKey($identity, $this->useDomainspace);
    }

}//end class