<?php
abstract class Animal
{
    /**
     * @var string
     */
    protected string $nom;

    /**
     * @var int
     */
    protected int $age;

    /**
     * @var int
     */
    protected int $nbPattes;

    /**
     * @var array
     */
    protected array $listAliment;

    public function __construct(string $name, int $age, int $nombreP, array $listeAlim)
    {
        $this->nom = $name;
        $this->age = $age;
        $this->nbPattes = $nombreP;
        $this->listAliment = $listeAlim;
    }


    /**
     * Get the value of nom
     *
     * @return  string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @param  string  $nom
     *
     * @return  self
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return  int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param  int  $age
     *
     * @return  self
     */
    public function setAge(int $age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get the value of nbPattes
     *
     * @return  int
     */
    public function getNbPattes()
    {
        return $this->nbPattes;
    }

    /**
     * Set the value of nbPattes
     *
     * @param  int  $nbPattes
     *
     * @return  self
     */
    public function setNbPattes(int $nbPattes)
    {
        $this->nbPattes = $nbPattes;

        return $this;
    }

    /**
     * Get the value of listAliment
     *
     * @return  array
     */
    public function getListAliment()
    {
        return $this->listAliment;
    }

    /**
     * Set the value of listAliment
     *
     * @param  array  $listAliment
     *
     * @return  self
     */
    public function setListAliment(array $listAliment)
    {
        $this->listAliment = $listAliment;

        return $this;
    }
}