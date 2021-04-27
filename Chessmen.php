<?php
include 'IChessmen.php';

abstract class Chessmen implements IChessmen
{
    public  $x = 0;
    public  $y = 0;

    public function getPosition()
    {
        return 'на позиции X: ' . $this->x . ' Y: ' . $this->y . '<br>';
    }
    public function move($x, $y)
    {

    }
}