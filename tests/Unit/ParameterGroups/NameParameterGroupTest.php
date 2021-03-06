<?php

namespace Heidelpay\Tests\PhpApi\Unit\ParameterGroup;

use PHPUnit\Framework\TestCase;
use Heidelpay\PhpApi\ParameterGroups\NameParameterGroup as Name;

/**
 * Unit test for NameParameterGroup
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-api/
 *
 * @author  Jens Richter
 *
 * @category unittest
 */
class NameParameterGroupTest extends TestCase
{
    /**
     * Birthdate getter/setter test
     *
     * @test
     */
    public function Birthdate()
    {
        $Name = new Name();

        $value = '1980-02-10';
        $Name->setBirthdate($value);

        $this->assertEquals($value, $Name->getBirthdate());
    }

    /**
     * Company getter/setter test
     */
    public function testCompany()
    {
        $Name = new Name();

        $value = 'Heidelpay';
        $Name->setCompany($value);

        $this->assertEquals($value, $Name->getCompany());
    }

    /**
     * Given name getter/setter test
     */
    public function testGiven()
    {
        $Name = new Name();

        $value = 'Heidel';
        $Name->setGiven($value);

        $this->assertEquals($value, $Name->getGiven());
    }

    /**
     * Family name getter/setter test
     */
    public function testFamily()
    {
        $Name = new Name();

        $value = 'Berger-Payment';
        $Name->setFamily($value);

        $this->assertEquals($value, $Name->getFamily());
    }

    /**
     * Salutation getter/setter test
     *
     * @test
     */
    public function Salutation()
    {
        $Name = new Name();

        $value = 'MR';
        $Name->setSalutation($value);

        $this->assertEquals($value, $Name->getSalutation());
    }

    /**
     * Title getter/setter test
     *
     * @test
     */
    public function Title()
    {
        $Name = new Name();

        $value = 'Doc.';
        $Name->setTitle($value);

        $this->assertEquals($value, $Name->getTitle());
    }
}
