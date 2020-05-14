<?php
include "class_lib.php";
$fan1 = new Fan();
$fan2 = new Fan();

$fan1->setSpeed(FAST);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);

$fan2->setSpeed(5);
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setOn(false);

echo "quat 1: " .$fan1->toString(). "<br>";
echo "quat 2: " .$fan2->toString();