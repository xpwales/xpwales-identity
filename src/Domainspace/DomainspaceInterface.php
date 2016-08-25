<?php

namespace Xpwales\Identity\Domainspace;

/**
 * Provides grouping for ID values.
 *
 * ID values within a domain space must be unique.
 *
 * Domain space typically relates to a database table but may relate to multiple tables.
 *
 * Example values: "user", "shop-item", "payment-transaction"
 *
 * @author Michael Adrian <michael.adrian@xpwales.com>
 */
interface DomainspaceInterface
{
    /**
     * @return string
     */
    public function getDomainSpace();

}//end interface