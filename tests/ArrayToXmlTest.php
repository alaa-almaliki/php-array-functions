<?php

namespace Asca;

/**
 * Class ArrayToXmlTest
 * @package Asca
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class ArrayToXmlTest extends \PHPUnit\Framework\TestCase
{
    public function testArrayToXml()
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

        $expected =<<<'XML'
<root>
<persons>
<person1>
<name>John Doe</name>
<job>Web Developer</job>
<years>5</years>
</person1>
</persons>
</root>

XML;

        $this->assertEquals($expected, array_to_xml($array));

        $expected =<<<'XML'
<persons>
<person1>
<name>John Doe</name>
<job>Web Developer</job>
<years>5</years>
</person1>
</persons>

XML;

        $this->assertEquals($expected, array_to_xml($array, null));
    }
}
