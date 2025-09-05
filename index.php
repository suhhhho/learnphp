<?php

$bool = true && false;
$bool = false && true;
$bool = false && false;
$bool = true && true;
var_dump($bool);
$bool = true || false;
$bool = false || true;
$bool =true || true;
$bool = false || false;
var_dump($bool);

$bool = !false;
var_dump($bool);
$bool = !true;
var_dump($bool);

$bool = (true || false && true) && !(!false || false && true );
var_dump($bool);
$bool = false;

$bool = 10 > 4;
$bool = 10 < 4;
$bool = 10 > 10;
$bool = 10 < 10;
$bool = 10 == 10;
$bool = 10 == '10';
$bool = 10 === '10';
$bool = 10 != '10';
$bool = 10 !== '10';
$bool = 10 <= 10;
$bool = 10 >= 10;
var_dump($bool);