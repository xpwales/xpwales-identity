<?php

namespace Xpwales\Identity\Identity;

use Xpwales\Identity\Domainspace\DomainspaceTrait;

class SingleIntegerIdentity implements IdentityInterface
{
	use DomainspaceTrait;

	/**
	 * @var int
	 */
	private $idValue = null;

	/**
	 * @param int $value
	 */
	public function __construct($value)
	{
		$this->setValue($value);
	}

	/**
	 * @inheritdoc
	 *
	 * @see IdentityInterface
	 */
	public function setValue($value, $name=null)
	{
		$value = (int) $value;

		if (empty($value) === true) {
			$msg = 'Value cannot be set with empty value';
			throw new Exception\InvalidArgumentException($msg);
		}

		$this->idValue = $value;

		return $this;
	}

	/**
	 * @inheritdoc
	 *
	 * @see IdentityInterface
	 */
	public function getValues()
	{
		if (null === $this->idValue) {
			$msg = 'Value must be set before access';
			throw new Exception\RuntimeException($msg);
		}

		$values = [$this->idValue];

		return $values;
	}

	/**
	 * @inheritdoc
	 *
	 * @see IdentityInterface
	 */
	public function isComplete()
	{
		$isComplete = !is_null($this->idValue);

		return $isComplete;
	}

}//end class