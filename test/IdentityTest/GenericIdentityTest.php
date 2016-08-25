<?php

namespace Xpwales\Identity\IdentityTest;

use Xpwales\Identity\Identity\GenericIdentity;

class GenericIdentityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test for single value mode
     */
    public function testSingleValueMode()
    {
        $value    = 32423;
        $identity = new GenericIdentity();

        $identity->setValue($value);

        $this->assertEquals($value, current($identity->getValues()));
    }

    public function testMultiValueMode()
    {
        $values = array(
            'fooValue' => 35232434532,
            'barValue' => 'nfuewnf98hududiuweciu',
        );
        $identity   = new GenericIdentity(array_keys($values));

        $this->assertFalse($identity->isComplete(), 'Identity should be in-complete');

        $identity->setValue($values['fooValue'], 'fooValue');

        $this->assertFalse($identity->isComplete(), 'Identity should be in-complete');

        $identity->setValue($values['barValue'], 'barValue');

        $this->assertTrue($identity->isComplete(), 'Identity should be complete');

        try {
            // Name should be required
            $identity->setValue('432432432');

            $this->fail('Exception should have been thrown on empty value name');

        } catch (\Xpwales\Identity\Identity\Exception\InvalidArgumentException $e) {
            //do nothing
        }

        try {
            // Name should exist
            $identity->setValue('432432432', 'dont-exist-name');

            $this->fail('Exception should have been thrown on non-recognised value name');

        } catch (\Xpwales\Identity\Identity\Exception\InvalidArgumentException $e) {
            //do nothing
        }

        // Value check
        $checkValues = $identity->getValues();

        $this->assertEquals($values['fooValue'], $checkValues['fooValue']);

        $this->assertEquals($values['barValue'], $checkValues['barValue']);

    }

}//end class