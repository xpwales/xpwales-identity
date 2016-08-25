<?php

namespace Xpwales\Identity\Domainspace;

use Xpwales\Identity\Domainspace\Exception;

trait DomainspaceTrait
{
    /**
     * @var string
     */
    private $domainspace = null;

    /**
     * @param string $domainspace
     *
     * @throws Exception\InvalidArgumentException on empty domain space value
     *
     * @return $this
     */
    public function setDomainspace($domainspace)
    {
        $domainspace = (string) $domainspace;

        if (empty($domainspace) === true) {
            $msg = 'Domain space cannot be set with an empty value';
            throw new Exception\InvalidArgumentException($msg);
        }

        $this->domainspace = $domainspace;

        return $this;
    }

    /**
     * @see DomainspaceInterface::getDomainSpace()
     *
     * @return string
     */
    public function getDomainspace()
    {
        if (null === $this->domainspace) {
            $msg = 'Domain space must be set before access';
            throw new Exception\RuntimeException($msg);
        }

        return $this->domainspace;
    }

}//end trait