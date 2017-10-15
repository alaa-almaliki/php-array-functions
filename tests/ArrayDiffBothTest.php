<?php

namespace Asca;

/**
 * Class ArrayDiffBothTest
 * @package Asca
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class ArrayDiffBothTest extends \PHPUnit\Framework\TestCase
{
    public function testArrayDiffBoth()
    {
        $array1 = ['One', 'Two', 'Three', 'Four', 'Five'];
        $array2 = ['Two', 'Four', 'Six', 'Eight', 'Ten'];
        $expected = ['One', 'Three', 'Five', 'Six', 'Eight', 'Ten'];

        $this->assertEquals($expected, array_diff_both($array1, $array2));
    }
}
