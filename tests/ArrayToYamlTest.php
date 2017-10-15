<?php

namespace Asca;

/**
 * Class ArrayToYamlTest
 * @package Asca
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class ArrayToYamlTest extends \PHPUnit\Framework\TestCase
{
    public function testArrayToYaml()
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
        $expected =<<<'YAML'
---
persons:
  person1:
    name: John Doe
    job: Web Developer
    years: 5
...

YAML;

        $this->assertEquals($expected, array_to_yaml($array));
    }
}
