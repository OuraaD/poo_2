<?php

class Conserve extends Article
{
    /**
     * @var array
     */
    private array $listExcipient;

    public function __construct (string $name, float $price, array $listExcipient) {
       parent:: __construct($name,$price);
       $this->listExcipient =$listExcipient;

    }


    /**
     * Get the value of listExcipient
     *
     * @return  array
     */
    public function getListExcipient()
    {
        return $this->listExcipient;
    }

    /**
     * Set the value of listExcipient
     *
     * @param  array  $listExcipient
     *
     * @return  self
     */
    public function setListExcipient(array $listExcipient)
    {
        $this->listExcipient = $listExcipient;

        return $this;
    }

    public function liste(){

        $all= implode(" ,",$this->listExcipient);

        return "Dans le produit $this->name,"  ."La liste des excipients est". $all;


    }
}

