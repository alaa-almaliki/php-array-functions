<?php

namespace Asca;

/**
 * Class FastArrayUniqueTest
 * @package Asca
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class FastArrayUniqueTest extends \PHPUnit\Framework\TestCase
{
    public function testFastArrayUnique()
    {
        $array = ['One', 'One', 'Tow', 'Three', 'Four', 'Five', 'Five'];
        $expected = ['One', 'Tow', 'Three', 'Four', 'Five'];
        $this->assertEquals($expected, fast_array_unique($array, true));
        $expected = [1=>'One', 2=>'Tow', 3=>'Three', 4=>'Four', 6=>'Five'];
        $this->assertEquals($expected, fast_array_unique($array));
    }
}
