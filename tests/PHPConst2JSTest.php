<?php

use Sunmant\PHPConst2JS\PHPConst2JS;

class ClassWithConstants
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
        $var->addClassConstants(ClassWithConstants::class);

        $arr['ClassWithConstants::CONSTANT1'] = ClassWithConstants::CONSTANT1;
        $this->assertSame($var->getJSON(), json_encode($arr));
        unset($var);
    }

}
