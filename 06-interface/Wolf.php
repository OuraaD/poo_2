<?php
require_once './Animal.php';
require_once './SavageAnimal.php';

class Wolf extends Animal implements SavageAnimal
{
    /**
     * @var bool
     */
    protected bool $solitaire;

    public function __construct($name,$age,$nombreP,$listeAlim,$seul)
    {
        parent::__construct($name,$age,$nombreP,$listeAlim);
        $this->solitaire=$seul;
    }
    /**
     * Get the value of solitaire
     *
     * @return  bool
     */ 
    public function getSolitaire()
    {
        return $this->solitaire;
    }

    /**
     * Set the value of solitaire
     *
     * @param  bool  $solitaire
     *
     * @return  self
     */ 
    public function setSolitaire(bool $solitaire)
    {
        $this->solitaire = $solitaire;

        return $this;
    }

    public function devore():string{
        return 'Je viens de manger';
    }

    public function eatBird(Bird $x):string{
        return "Je viens de manger l'oiseau qui s'appelait $x->nom";
    }
}