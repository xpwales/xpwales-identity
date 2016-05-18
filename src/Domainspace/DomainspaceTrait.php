<?php

namespace Xpwales\Identity\Domainspace;

use Xpwales\Identity\Domainspace\Exception;

/**
 * Accessors for domain space implementation
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 *
 * @package Xpwales\Identity\DomainSpace
 */
trait DomainspaceTrait
{
    /**
     * @var string
     */
    private $domainspace = null;

    /**
     * @param string $domainspace
     *
     * @throws Exception\InvalidArgumentException on empty domainspace param value
     *
     * @return $this
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
     * @throws Exception\RuntimeException on unset domain space
     *
     * @return string
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