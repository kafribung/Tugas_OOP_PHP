<?php 
// Import Data dari animal-oop
require_once('animal-oop.php');

class Frog extends Animal 
{
    // Property
    public $name;
    public $legs = 4 ;


    // Method Construct = Method yg pertamakali di eksekusi, new Frog('Kafri')
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function jump() 
    {
        return 'hop-hop';
    }

    // Overwriting method (Untuk menimpa method get_legs dari class parant/animal-oop)
    public function get_legs()
    {
        return $this->legs;
    }

}
