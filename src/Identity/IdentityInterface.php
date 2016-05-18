<?php

namespace Xpwales\Identity\Identity;

use Xpwales\Identity\Domainspace\DomainspaceInterface;

/**
 * Represents a unique entity ID value.
 *
 * It's uniqueness is formed by a combination of domain space and value.
 * The value may not be unique within the application but should be unique within it's domain space.
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 */
interface IdentityInterface extends DomainspaceInterface
{
    /**
     * Array may be associative to identify each value
     *
     * @return \Traversable|array
     */
    public function getValues();

}//end interface