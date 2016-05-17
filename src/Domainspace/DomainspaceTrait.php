<?php

namespace Xpwales\Identity\Domainspace;

use Xpwales\Identity\Domainspace\Exception;

/**
 * DomainspaceTrait
 *
 * Accessors for classes implementing the domain space interface
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 *
 * @package Xpwales\Identity\DomainSpace
 */
trait DomainspaceTrait
{
    /**
     * @var null
     */
    private $domainspace = null;

    /**
     * @param string $domainspace
     *
     * @return $this
     *
     * @throws Exception\InvalidArgumentException on empty domainspace param
     */
    public function setDomainspace($domainspace)
    {
        $domainspace = (string) $domainspace;

        if (empty($domainspace) === true) {
            $msg = 'Domainspace cannot be set with an empty value';
            throw new Exception\InvalidArgumentException($msg);
        }

        $this->domainspace = $domainspace;

        return $this;
    }

    /**
     * @see DomainspaceInterface
     */
    public function getDomainspace()
    {
        if (null === $this->domainspace) {
            $msg = 'Domainspace must be set before access';
            throw new Exception\RuntimeException($msg);
        }

        return $this->domainspace;
    }

}//end trait