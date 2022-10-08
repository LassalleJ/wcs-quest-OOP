<?php
require_once 'Car.php';
require_once 'Bicycle.php';

$twingo=new Car('green', 4, 'diesel');
$ferrari=new Car('red',4, 'gasoline');
$bike =new Bicycle ('yellow');

var_dump($twingo);
var_dump($ferrari);
var_dump($bike);