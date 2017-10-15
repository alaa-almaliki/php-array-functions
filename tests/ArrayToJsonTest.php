<?php

namespace Asca;

/**
 * Class ArrayToJsonTest
 * @package Asca
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class ArrayToJsonTest extends \PHPUnit\Framework\TestCase
{
    public function testArrayToJson()
    {
        $array = [
            'persons' => [
                'person1' => [
                    'name' => 'John Doe',
                    'job' => 'Web Developer',
                    'years' => 5
                ]
            ]
        ];
        $expected = '{"persons":{"person1":{"name":"John Doe","job":"Web Developer","years":5}}}';
        $this->assertEquals($expected, array_to_json($array));
    }
}
