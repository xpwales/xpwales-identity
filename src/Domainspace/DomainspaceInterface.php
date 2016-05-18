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
interface DomainspaceInterface
{
    /**
     * @return string
     */
    public function getDomainspace();

}//end interface