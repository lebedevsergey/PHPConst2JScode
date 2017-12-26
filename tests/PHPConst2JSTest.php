<?php 

class PHPConst2JSTest extends PHPUnit_Framework_TestCase{
	
  public function testIsThereAnySyntaxError(){
	$var = new Sunmant\PHPConst2JS\PHPConst2JS;
	$this->assertTrue(is_object($var));
	unset($var);
  }
  
}