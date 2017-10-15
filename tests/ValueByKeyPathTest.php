<?php

namespace Asca;

/**
 * Class ValueByKeyPathTest
 * @package Asca
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class ValueByKeyPathTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @param $keyPath
     * @dataProvider getKeys
     */
    public function testValueByKeyPath($keyPath)
    {
        $this->assertTrue(in_array(value_by_key_path($this->getArray(), $keyPath), ['John', 'Sara', 'Ahmed']));
    }

    public function testValueByKeyPathUsingKeyOnly()
    {
        $expected = [
            'junior' => [
                'name' => 'John',
                'years' => 1
            ],
            'intermediate' => [
                'name' => 'Sara',
                'years' => 2,
            ],
            'senior' => [
                'name' => 'Ahmed',
                'years' => 5
            ]
        ];

        $this->assertEquals($expected, value_by_key_path($this->getArray(), 'employees'));
    }

    /**
     * @return array
     */
    public function getKeys()
    {
        return [
            ['employees/junior/name'],
            ['employees/intermediate/name'],
            ['employees/senior/name'],
        ];
    }

    /**
     * @return array
     */
    private function getArray()
    {
        return [
            'employees' => [
                'junior' => [
                    'name' => 'John',
                    'years' => 1
                ],
                'intermediate' => [
                    'name' => 'Sara',
                    'years' => 2,
                ],
                'senior' => [
                    'name' => 'Ahmed',
                    'years' => 5
                ]
            ]
        ];
    }
}
