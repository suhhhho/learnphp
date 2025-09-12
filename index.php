<?php

function hello() {
    var_dump('hello');
}

hello();
hello();
hello();
hello();


function helloName($name='Unknown') {
    var_dump("hello $name");
}

helloName('Kaspar');
helloName('Martin');
helloName();

function sum($a, $b) {
    return $a+$b;
}

var_dump(sum(1,4));
$answer = sum(6,5);

function biggerThanTen($n) {
    if($n > 10){
        return 'Bigger';
    }
    return 'Smaller';
    var_dump('asdasdasdasd'); // never runs
}

var_dump(biggerThanTen(11));
var_dump(biggerThanTen(4));

function anything(...$args) {
    var_dump($args);
}
anything(1, 2, 3, 4, 5, 6, 7);

function recursive($n){
    if($n<10){
        var_dump($n);
        recursive($n+1);
    }
}

recursive(0);