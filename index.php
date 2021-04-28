<?php
include 'King.php';
include 'Queen.php';

$king = new King(4, 3);
$queen = new Queen(1, 1);

$king->move(3,3);
$king->move(3,2);
$king->move(2,2);

$queen->move(7,1);
$queen->move(7,3);
?>

