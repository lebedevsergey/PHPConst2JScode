<?php

use Sunmant\PHPConst2JS\PHPConst2JS;

class ClassWithConstant
{
    const CONSTANT1 = 1;
}

class PHPConst2JSTest extends PHPUnit_Framework_TestCase
{
    public function testIsThereAnySyntaxError()
    {
        $var = new PHPConst2JS;
        $this->assertTrue(is_object($var));
        unset($var);
    }

    public function testAddConstAndGetJSON()
    {
        $var = new PHPConst2JS();
        $var->addClassConstants(ClassWithConstant::class);

        $arr['ClassWithConstant::CONSTANT1'] = ClassWithConstant::CONSTANT1;
        $this->assertSame($var->getJSON(), json_encode($arr));
        unset($var);
    }

}
