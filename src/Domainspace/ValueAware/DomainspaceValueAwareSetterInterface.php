<?php

namespace Xpwales\Identity\Domainspace\ValueAware;

use Xpwales\Identity\Domainspace\DomainspaceValueInterface;

interface DomainspaceValueAwareSetterInterface
{
    /**
     * @param DomainspaceValueInterface $domainspace
     *
     * @return $this
     */
    public function setDomainspace(DomainspaceValueInterface $domainspace);

}//end interface