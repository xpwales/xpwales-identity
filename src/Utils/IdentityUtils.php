<?php

namespace Xpwales\Identity\Utils;

use Xpwales\Identity\Identity\IdentityInterface;

class IdentityUtils
{
    /**
     * @param IdentityInterface $identity
     * @param bool              $useDomainspace
     *
     * @throws Exception\InvalidArgumentException on in-complete identity
     *
     * @return string
     */
    public static function assembleIdKey(IdentityInterface $identity, $useDomainspace = true)
    {
        if ($identity->isComplete() === false) {
            $msg = 'Identity must be complete for ID key assembly';
            throw new Exception\InvalidArgumentException($msg);
        }

        $idKeyArr   = [];

        $useDomainspace = (bool) $useDomainspace;

        if (true === $useDomainspace) {
            $idKeyArr[] = $identity->getDomainspace();
        }

        foreach ($identity->getValues() as $value) {
            $idKeyArr[] = $value;
        }//end loop

        $idKey = implode('_', $idKeyArr);

        return $idKey;
    }

}//end class