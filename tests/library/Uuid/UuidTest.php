<?php
namespace UuidTests;

/**
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * Copyright [2012] [Robert Allen]
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package  UuidTests
 * @category Uuid
 */
/**
 * @package  UuidTests
 * @category Uuid
 */
class UuidTest extends \PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testSetUuid()
    {
        $expected = '7bda4f10-62bb-11df-9e4d-5ecec8f8ce7d';
        $uuid = new \Uuid\Uuid(str_replace('-','',$expected));
//        $uuid->setUuid($expected);
        $this->assertEquals($expected, (string)$uuid);
    }

    /**
     *
     */
    public function testGetUuid()
    {

        $expected = '7bda4f10-62bb-11df-9e4d-5ecec8f8ce7d';
        $uuid = new \Uuid\Uuid(str_replace('-','',$expected));

        $this->assertEquals($expected, $uuid->getUuid());
    }

    /**
     *
     */
    public function testGenerate()
    {
        $expected = '7bda4f10-62bb-11df-9e4d-5ecec8f8ce7d';
        $uuid = \Uuid\Uuid::generate(str_replace('-','',$expected));
        $this->assertEquals($expected, $uuid);
    }

    /**
     * @expectedException UnexpectedValueException
     */
    public function testUnexpectedValueException()
    {
        new \Uuid\Uuid('jhgf');
    }
}
