<?php
namespace Sunmant\phpconst2js;

use ReflectionClass;

class PHPConst2JS
{
    private $constants = [];

    /**
     * gets resulted JSON string
     * @return type
     */
    public function getJSON()
    {
        return json_encode($this->constants);
    }

    /**
     * add all class constants to resulted JSON
     * @param string $classFullName
     */
    public function addClassConstants($classFullName)
    {
        $r = new ReflectionClass($classFullName);
        $className = $r->getShortName();
        $classConstants = $r->getConstants();
        array_walk($classConstants, function ($value, $name) use ($className) {
            $this->constants["$className::$name"] = $value;
        });
    }

}
