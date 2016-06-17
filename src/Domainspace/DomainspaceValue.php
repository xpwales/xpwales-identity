<?php

namespace Xpwales\Identity\Domainspace;

class DomainspaceValue implements DomainspaceValueInterface
{
    /**
     * @var string
     */
    private $domainspace = null;

    /**
     * @param string $domainspace
     *
     * @throws Exception\InvalidArgumentException on empty domainspace value
     */
    public function __construct($domainspace)
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
     * @inheritdoc
     */
    public function getValue()
    {
        return $this->domainspace;
    }

    /**
     * @inheritdoc
     */
    public function toString()
    {
        return $this->getValue();
    }

    /**
     * @inheritdoc
     */
    public function __toString()
    {
        return $this->getValue();
    }

}//end class