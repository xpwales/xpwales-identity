<?php

namespace Xpwales\Identity\Identity;

use Xpwales\Identity\Domainspace\DomainspaceInterface;

/**
 * Represents a unique system identity.
 *
 * The uniqueness is formed by a combination of domain space and value.
 *
 * The value is unique within its domain space and the domain space is
 * unique to other domains within the system.
 *
 * The value may consist of a single scalar (string or integer) or a
 * combination of multiple scalars. Where the identity is representing database
 * table ID's (most common use), multiple values will accommodate database tables
 * with combined primary keys.
 *
 * Note:
 * Countable interface must report the total number of value containers
 * that the instance represents regardless of whether they are populated or not.
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 */
interface IdentityInterface extends \Traversable, \Countable, DomainspaceInterface
{
    /**
     * Is the identity fully populated and complete
     *
     * @return bool
     */
    public function getIsComplete();

    /**
     * Get identity value
     * Name param must be null for single value identities
     *
     * @param string|null $name Key referincing a multi value part
     *
     * @return mixed
     */
    public function getValue($name=null);

}//end interface