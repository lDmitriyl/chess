<?php


class Queen extends Chessmen
{
    public function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function getPosition()
    {
        echo 'Королева ' . parent::getPosition();
    }

    public function move($x, $y){



            if($x < 1 || $x > 8 || $y < 1 || $y > 8){
                throw new Exception('Вы переместились за край шахматной доски');
            }

            if(($this->x > $x || $this->x < $x) && $this->y == $y){
                $this->x = $x;
                $this->getPosition();
                return true;
            }

            if($this->x == $x && ($this->y > $y || $this->y < $y)){
                $this->y = $y;
                $this->getPosition();
                return true;
            }

            if($this->x > $x && $this->y < $y){

                if($this->x - $x !== ($this->y - $y) * -1){
                    throw new Exception('Королева не может так ходить, учите правила шахмат');
                }

                $this->x = $x;
                $this->y = $y;
                $this->getPosition();
            }

            if($this->x < $x && $this->y > $y){

                if(($this->x - $x) * -1 !== $this->y - $y){
                    throw new Exception('Королева не может так ходить, учите правила шахмат');
                }

                $this->x = $x;
                $this->y = $y;
                $this->getPosition();
            }

            if($this->x > $x && $this->y > $y){

                if($this->x - $x !== $this->y - $y){
                    throw new Exception('Королева не может так ходить, учите правила шахмат');
                }

                $this->x = $x;
                $this->y = $y;
                $this->getPosition();
            }

            if($this->x < $x && $this->y < $y){

                if($this->x - $x !== $this->y - $y){
                    throw new Exception('Королева не может так ходить, учите правила шахмат');
                }

                $this->x = $x;
                $this->y = $y;
                $this->getPosition();
            }



    }
}