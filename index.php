<?php

class Box {
    public $width;
    public $height;
    public $lenght;

    public function volume(){
        return $this ->width * $this ->height * $this->lenght;
    }
}

$box1 = new Box();
$box1 ->width= 10;
$box1 ->height= 20;
$box1 ->lenght= 30;
var_dump($box1);
var_dump($box1 ->volume());

$box2 = new Box();
$box2->width= 40;
$box2 ->height= 50;
$box2 ->lenght= 60;
var_dump($box2);
var_dump($box2 ->volume());

var_dump($box1);