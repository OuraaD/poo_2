<?php
require_once './Animal.php';

class Bird extends Animal
{
    /**
     * @var bool
     */
    protected bool $migrate;

    public function __construct(string $name, int $age, int $nombreP, array $listeAlim, bool $migre)
    {
        parent::__construct($name, $age, $nombreP, $listeAlim);
        $this->migrate = $migre;
    }
    /**
     * Get the value of migrate
     *
     * @return  bool
     */
    public function getMigrate()
    {
        return $this->migrate;
    }

    /**
     * Set the value of migrate
     *
     * @param  bool  $migrate
     *
     * @return  self
     */
    public function setMigrate(bool $migrate)
    {
        $this->migrate = $migrate;

        return $this;
    }

    protected function description(): string
    {
        if ($this->migrate == true) {
            return 'Je suis un oiseau migrateur';
        }
        return 'Je ne suis pas un oiseau migrateur"';
    }
}