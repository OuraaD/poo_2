<?php

class Mage extends Player{

    private int $mana;

 public function __construct(string $name, int $mana)
    {
    parent::__construct($name);
    $this->mana=$mana;
    }


    /**
     * Get the value of mana
     */ 
    public function getMana()
    {
        return $this->mana;
    }

    /**
     * Set the value of mana
     *
     * @return  self
     */ 
    public function setMana($mana)
    {
        $this->mana = $mana;

        return $this;
    }

    public function hit():void 
    {
        $this->life= $this->life -30;
    }

}