<?php
namespace UuidTests;

/**
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
