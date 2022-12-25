<?php
class ObjectTracker {
    private static $nextSerial = 0;
    private $id, $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->id = ++self::$nextSerial;
    }

    public function __clone()
    {
        $this->name = "Clone of $this->name";
        $this->id = ++self::$nextSerial;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }
}

$ot = new ObjectTracker("Name1");
$ot2 = clone $ot;
$ot2->setName("Name set");

print ($ot->getId() . " " .$ot->getName() . "<br>" );
print ($ot2->getId() . " " .$ot2->getName() . "<br>" );