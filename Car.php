<?php

class Car
{
    private $name;
    private $number;
    private $color;

    public function __construct($name, $number, $color)
    {
        $this->body = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getColor()
    {
        return $this->color;
    }
    
    public function information()
    {
        return "車の車種:" . $this->name . "\n" .
                "車体番号:" . $this->number. "\n" .
                "カラー:" . $this->color . "\n";
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function setNumber($number)
    {
        return $this->number = $number;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }
}