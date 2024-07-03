<?php

class Aliments extends Article{

    /**
     * @var string
     */
    protected string $datePeremption;

    public function __construct($name, $price, $dlc) {
       parent::__construct($name, $price);
        $this->datePeremption =$dlc;
    }


    /**
     * Get the value of datePeremption
     */
    public function getDatePeremption()
    {
        return $this->datePeremption;
    }

    /**
     * Set the value of datePeremption
     *
     * @return  self
     */
    public function setDatePeremption($datePeremption)
    {
        $this->datePeremption = $datePeremption;

        return $this;
    }


    public function displayProduct()
    {
        return parent::displayProduct()." et la date de peremption est en $this->datePeremption.";


    }
};