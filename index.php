
<?php

class Box {
    private $width;
    public $height;
    public $lenght;

    use Colorful, Smelly;
    
    public function __construct($width, $height, $lenght)
    {
        var_dump('Class was created');
        $this->width = $width;
        $this->height = $height;
        $this->lenght = $lenght;
    }

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

    public function __toString()
    {
        return 'I am a box';
    }

    public function __destruct()
    {
        var_dump('Object was destroyed');
    }

    public function __get($name) {
        var_dump($name);
        return 'I am a cool value';
    }

    public function __set($name, $value) {
        var_dump($name, $value);
    }

    public function __invoke($var1, $var2)
    {
        var_dump($var1, $var2);
    }

    public function __call($name, $args) {
        var_dump($name, $args);
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

class Cat {
    use Colorful;
}

trait Colorful {
    public $color;
    public function setColor($color) {
        $this->color = $color;
    }
}

trait Smelly {
    public $smell;
    public function setSmell($smell) {
        $this->smell = $smell;
    }
}
function createObject() {
    $metalBox1 = new MetalBox(10, 20, 30);
    // $metalBox1->setWidth(32);
    // //$metalBox1->test();
    // var_dump($metalBox1->getWidth());
    // $metalBox1->height = 20;
    // $metalBox1->lenght = 30;

    var_dump($metalBox1->volume());
    var_dump($metalBox1);
    echo $metalBox1;
    var_dump($metalBox1->blablabla);
    $metalBox1->rainbows = 'Some cool value';
    $metalBox1('value1', 'value2');
    $metalBox1->thisdoesntexist('aasd', 1, 2, 3);
}
createObject();
//unset($metalBox1);
//$metalBox1 = 1;
var_dump('Program end');
