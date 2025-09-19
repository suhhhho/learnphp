<?php

class Box {
    private $width;
    public $height;
    public $length;
    
    public static $count = 0;

    public static function something(){
        var_dump(Box::$count);
        var_dump(self::$count);
        //var_dump($this->width);
        var_dump(self::class);
        var_dump(static::class);
    }

    public function __construct($width, $height, $length)
    {
        var_dump(Box::$count);
        var_dump(self::$count);
        
        $this->width = $width;
        $this->height = $height;
        $this->length = $length;
    }
}

class MetalBox extends Box {

}


Box::$count = 1;
var_dump(Box::$count);

Box::$count = 2;
var_dump(Box::$count);
var_dump(Box::$count);
MetalBox::something();
Box::something();