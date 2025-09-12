<?php

class Box {
    public $width;
    public $height;
    public $lenght;

    public function volume(){
        return $this ->width * $this-> height * $this -> lenght;
    }

}

class MetalBox extends Box {
    public $material = 'Metal';
    public $weightPerUnit = 2;

    public function mass() {
        return $this -> volume() * $this ->weightOerUnit;
    }
}

$metalBox1 = new MetalBox();
$metalBox1->width = 10;
$metalBox1->height = 20;
$metalBox1->lenght = 30;

var_dump($metalBox1->volume());
var_dump($metalBox1->mass());
var_dump($metalBox1);