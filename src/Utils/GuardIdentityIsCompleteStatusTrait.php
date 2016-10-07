<?php

namespace Xpwales\Identity\Utils;

use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\Identity\Utils\Exception;

trait GuardIdentityIsCompleteStatusTrait
{
    /**
     * @param IdentityInterface $identity
     *
     * @throws Exception\InvalidArgumentException on incomplete identity
     */
    protected function guardIdentityIsComplete(IdentityInterface $identity)
    {
        if (false === $identity->isComplete()) {
            $msg = 'Identity must be complete';
            throw new Exception\InvalidArgumentException($msg);
        }
    }

    /**
     * @param IdentityInterface $identity
     *
     * @throws Exception\InvalidArgumentException on complete identity
     */
    protected function guardIdentityIsIncomplete(IdentityInterface $identity)
    {
        if (true === $identity->isComplete()) {
            $msg = 'Identity must be incomplete';
            throw new Exception\InvalidArgumentException($msg);
        }
    }

}//end trait