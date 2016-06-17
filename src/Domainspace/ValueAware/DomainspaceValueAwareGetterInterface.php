<?php

namespace Xpwales\Identity\Domainspace\ValueAware;

use Xpwales\Identity\Domainspace\DomainspaceValueInterface;

interface DomainspaceValueAwareGetterInterface
{
    /**
     * @return DomainspaceValueInterface
     */
    public function getDomainspace();

}//end interface