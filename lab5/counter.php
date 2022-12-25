<?php

class Counter
{
    private static $count = 0;
    const VERSION = 2.0;

    public function __construct()
    {
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
    }

    static function getCount(): int
    {
        return self::$count;
    }
}

$c1 = new Counter();
print ($c1->getCount() . "<br>\n");

$c2 = new Counter();
print (Counter::getCount() . "<br>\n");

$c2 = NULL;
print ($c1->getCount() . "<br>");
print ("Version used: " . Counter::VERSION . "<br>");