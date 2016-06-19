<?php

namespace Xpwales\Identity\Identity;

use Xpwales\Identity\Domainspace\ValueAware\DomainspaceValueAwareGetterInterface;

/**
 * Represents a unique entity ID value.
 *
 * It's uniqueness is formed by a combination of domain space and values.
 * The values may not be unique within the application but should be unique within it's domain space.
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 */
interface IdentityInterface extends DomainspaceValueAwareGetterInterface
{
    /**
     * @return array
     */
    public function getValues();

    /**
     * @param int|string  $value
     * @param null|string $name
     *
     * @return $this
     */
    public function setValue($value, $name=null);

    /**
     * Are all values populated
     *
     * @return bool
     */
    public function isComplete();

}//end interface