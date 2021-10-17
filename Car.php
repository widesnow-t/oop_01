<?php

class Car
{
    private $body;
    private $number;
    private $color;

    public function __construct($body, $number, $color)
    {
        $this->body = $body;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->body;
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
        return "車の車種:" . $this->body . "\n" .
                "車体番号:" . $this->number. "\n" .
                "カラー:" . $this->color . "\n";
    }

    public function setName($body)
    {
        return $this->body = $body;
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