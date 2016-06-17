<?php

namespace Xpwales\Identity\Domainspace\ValueAware;

use Xpwales\Identity\Domainspace\DomainspaceValueInterface;
use Xpwales\Identity\Domainspace\Exception;

trait DomainspaceValueAwareTrait
{
    /**
     * @var DomainspaceValueInterface
     */
    private $domainspace = null;

    /**
     * @param DomainspaceValueInterface $domainspace
     *
     * @return $this
     */
    public function setDomainspace(DomainspaceValueInterface $domainspace)
    {
        $this->domainspace = $domainspace;
        return $this;
    }

    /**
     * @return DomainspaceValueInterface
     */
    public function getDomainspace()
    {
        if (null === $this->domainspace) {
            $msg = sprintf('Domainspace must be set before access in %s', __CLASS__);
            throw new Exception\RuntimeException($msg);
        }

        return $this->domainspace;
    }

}//end trait