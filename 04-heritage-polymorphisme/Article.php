
<?php

class Article
{

   protected string $name;
    protected float $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    public function displayProduct()
    {
        echo "Le produit $this->name, coûte $this->price euros";
    }
}