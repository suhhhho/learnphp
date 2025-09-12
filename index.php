<?php

$i = 5;
if($i > 10){
    var_dump('bigger');
} elseif ($i == 10){
    var_dump('equals');
} else {
    var_dump('smaller');
}

$day = (int) date ('w', startotime('8.09.2025'));

var_dump($day);

if($day == 1) {
    var_dump('Esmaspäev');
} else if($day == 2) {
    var_dump('Teisipäev');
}else if($day == 3) {
    var_dump('Kolmapäev');
}else if($day == 4) {
    var_dump('Nejapäev');
}else if($day == 5) {
    var_dump('Reede');
}else if($day == 6) {
    var_dump('Laupäaev');
}else if($day == 7) {
    var_dump('Pühapäev');
}

switch($day) {
    case 1:
        var_dump('Esmaspäev');
        break;
    case 2:
        var_dump('Teisipäev');
        break;
    case 3:
        var_dump('Kolmapäev');
        break;
    case 4:
        var_dump('Neljapäev');
        break;
    case 5:
    case 6:
        var_dump('Pidupäev');
        break;
    case 7:
        var_dump('Pühapäev');
        break;
    default:
    var_dump('Imelik päev');
}