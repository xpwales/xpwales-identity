<?php

namespace Xpwales\Identity\Domainspace;

/**
 * DomainspaceInterface
 *
 * Implementing classes will provide a domain space which is
 * unique to the application. It provides a mechanism for grouping related identites
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 *
 * @package Xpwales\Identity\DomainSpace
 */
interface DomainspaceInterface
{
    /**
     * @return string
     */
    public function getDomainspace();

}//end interface