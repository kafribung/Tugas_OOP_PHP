<?php 
// Import Data dari animal-oop
require_once('animal-oop.php');

class Ape extends Animal 
{
    // Property
    public $name;

    // Method Construct = Method yg pertamakali di eksekusi, new Ape('Kafri')
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function yell() 
    {
        return 'Auooo';
    }

}
