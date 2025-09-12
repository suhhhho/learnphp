<?php

for($i=0; $i<10; $i++){
    var_dump($i);
}

for($i=9; $i>=0; $i--){
    var_dump($i);
}
for($i=1; $i<1_000_000; $i*=2){
    var_dump($i);
}

$start = time();
$i = 0;
while(time()<$start+1){
    $i++;
}
var_dump($i);
$start = time();
for($i=0; time()<$start+1;$i++){

}
var_dump($i);

$i = 10;
while($i<10){
    var_dump('WHILE');
}

do{
    var_dump('DO');
}while($i<10);

$array = ['Apples', 'Cherries', 'Pears', 'Apricot'];

foreach($array as $fruit){
    var_dump($fruit);
}

foreach($array as $key=>$fruit){
    var_dump("$key=>$fruit");
}