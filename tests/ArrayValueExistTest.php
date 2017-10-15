<?php
namespace Asca;

/**
 * Class ArrayValueExistTest
 * @package Asca
 * @author Alaa Al-Maliki <alaa.almaliki@gmail.com>
 */
class ArrayValueExistTest extends \PHPUnit\Framework\TestCase
{
    public function testValueExist()
    {
        $array = ['One', 'Tow', 'Three', 'Four', 'Five'];
        $this->assertTrue(\Asca\array_value_exist('One', $array));
        $this->assertFalse(\Asca\array_value_exist('Six', $array));
    }
}
