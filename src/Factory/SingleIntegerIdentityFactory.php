<?php
/**
 * Generic factory for single integer identity types.
 */

namespace Xpwales\Identity\Factory;

use Xpwales\Identity\Domainspace\DomainspaceInterface;
use Xpwales\Identity\Domainspace\DomainspaceTrait;
use Xpwales\Identity\Identity\SingleIntegerIdentity;

class SingleIntegerIdentityFactory
	implements IdentityFactoryInterface, DomainspaceInterface
{
	use DomainspaceTrait;

	/**
	 * @inheritdoc
	 *
	 * @see IdentityFactoryInterface
	 */
	public function createIdentity($values=null)
	{
		$identity    = new SingleIntegerIdentity($values);
		$domainspace = $this->getDomainspace();

		$identity->setDomainspace($domainspace);

		return $identity;
	}

}//end class