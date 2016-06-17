<?php

namespace Xpwales\Identity\Domainspace;

/**
 * Implementing classes provides a domain space which is
 * unique within an application.
 *
 * Can be used to group related domain entities.
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 */
interface DomainspaceValueInterface
{
    /**
     * @return string
     */
    public function getValue();

    /**
     * Proxy to getValue();
     *
     * @return string
     */
    public function toString();

    /**
     * Proxy to getValue();
     * 
     * @return string
     */
    public function __toString();

}//end interface