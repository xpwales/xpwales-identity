<?php

namespace Xpwales\Identity\Utils;

use Xpwales\Identity\Identity\IdentityInterface;
use Xpwales\Identity\Utils\Exception;

class IdentityUtils
{
    /**
     * @param IdentityInterface $identity
     *
     * @return string
     */
    public static function assembleKey(IdentityInterface $identity)
    {
        if (false === $identity->isComplete()) {
            $msg = 'Identity must be complete for key assembly';
            throw new Exception\InvalidArgumentException($msg);
        }

        $keyArr = [$identity->getDomainSpace()];
        $values = $identity->getValues();
        $keyArr = array_merge($keyArr, $values);
        $key    = implode('-', $keyArr);

        return $key;
    }

}//end class