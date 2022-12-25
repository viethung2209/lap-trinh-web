<?php

class MethodTest
{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo "Calling object method '$name' "
            . implode(', ', $arguments) . "<br>";
    }

    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement __callStatic() method.
        echo "Calling static method '$name'"
            . implode(', ', $arguments) . "<br>";
    }
}

$obj = new MethodTest();
$obj->runTest('in object context');

MethodTest::runTest('in static context');