<?php
class animal
{
    private $eats;
    private $species;
    function __construct($species, $eats)
    {
        $this->eats = $eats;
        $this->species = $species;
    }
    public function show()
    {
        printf("Animal is %s <br> ", $this->species);
        printf("%s eats %s <br>", $this->species, $this->eats);
    }
}
class dog extends animal
{
    function show()
    {
        parent::show();
        echo "This is dog class <br>";
    }
}
$dogob = new dog("Dog", "dog food");
$dogob->show();
