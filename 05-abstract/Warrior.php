<?php

class Warrior extends Player{

    private int  $arrow ;
    
    public function __construct( string $name,int $nbrFleches)
    {
    parent::__construct($name);
    $this->arrow=$nbrFleches;
    }

    /**
     * Get the value of arrow
     */ 
    public function getArrow()
    {
        return $this->arrow;
    }

    /**
     * Set the value of arrow
     *
     * @return  self
     */ 
    public function setArrow($arrow)
    {
        $this->arrow = $arrow;

        return $this;
    }
   
    public function hit():void 
    {
        $this->life= $this->life -15;
    }

}


