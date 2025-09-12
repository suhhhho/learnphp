<?php

class Box {
    private $width;
    public $height;
    public $lenght;

    public function setWidth($width) {
        if(is_numeric($width) && $width > 0){
            $this->width = $width;
        } else {
            throw new Exception('You are an idiot');
        }
        
    }

    public function getWidth(){
        return $this->width;
    }

    public function volume(){
        return $this->width * $this->height * $this->lenght;
    }
}

class MetalBox extends Box {
    public $material = 'Metal🤘';
    public $weightPerUnit = 2;

    public function test(){
        var_dump($this->lenght);
    }

    public function mass() {
        return $this->volume() * $this->weightPerUnit;
    }
}

$metalBox1 = new MetalBox();
$metalBox1->setWidth(32);
//$metalBox1->test();
var_dump($metalBox1->getWidth());
$metalBox1->height = 20;
$metalBox1->lenght = 30;

var_dump($metalBox1->volume());
var_dump($metalBox1);