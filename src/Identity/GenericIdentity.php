<?php

namespace Xpwales\Identity\Identity;

use Xpwales\Identity\Domainspace\DomainspaceTrait;
use Xpwales\Identity\Identity\Exception;

/**
 * Generic identity class
 *
 * @package Xpwales\Identity\Identity
 */
class GenericIdentity implements IdentityInterface
{
    use DomainspaceTrait;

    // For single value identities
    const DEFAULT_VALUE_NAME = 'default';

    /**
     * Array count is immutable after instantiation in order to determine "completeness"
     *
     * @var array
     */
    private $values = array();

    /**
     * @param array $valueNames
     *
     * @throws Exception\InvalidArgumentException on an empty value name
     * @throws Exception\InvalidArgumentException on name being declared more than once
     */
    public function __construct(array $valueNames = array())
    {
        foreach ($valueNames as $index => $name) {
            $name = (string) $name;
            
            if (empty($name) === true) {
                $msg = sprintf('Name cannot be set with an empty value on index number %s', $index);
                throw new Exception\InvalidArgumentException($msg);
            }

            if (array_key_exists($name, $this->values) === true) {
                $msg = sprintf('Name: %s cannot be defined multiple times', $name);
                throw new Exception\InvalidArgumentException($msg);
            }

            $this->values[$name] = null;
            
        }//end loop

        if (count($this->values) === 0) {
            // Is single value identity
            $this->values[static::DEFAULT_VALUE_NAME] = null;
        }
    }

    /**
     * @inheritdoc
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * @inheritdoc
     *
     * @throws Exception\InvalidArgumentException on non-scalar value
     * @throws Exception\InvalidArgumentException on empty value param
     * @throws Exception\InvalidArgumentException on zero value name param (null acceptable)
     * @throws Exception\InvalidArgumentException on un-recognised name
     */
    public function setValue($value, $name = null)
    {
        // Validate value

        if (is_scalar($value) === false) {
            $msg = 'Value must be a scalar type';
            throw new Exception\InvalidArgumentException($msg);
        }

        if (empty($value) === true) {
            $msg = 'Value cannot be set with an empty value';
            throw new Exception\InvalidArgumentException($msg);
        }

        // No name specified? Assume single value identity
        $name = (null === $name) ? static::DEFAULT_VALUE_NAME : $name;

        // Validate name

        if (empty($name) === true) {
            $msg = 'Name cannot be set with an empty value';
            throw new Exception\InvalidArgumentException($msg);
        }

        if (array_key_exists($name, $this->values) === false) {
            // Name not defined and also default name was not defined
            $msg = sprintf('Name: %s is not recognised', $name);
            throw new Exception\InvalidArgumentException($msg);
        }

        // Assign
        $this->values[$name] = $value;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function isComplete()
    {
        foreach ($this->values as $value) {
            if (null === $value) {
                return false;
            }
        }//end loop

        return true;
    }

}//end class