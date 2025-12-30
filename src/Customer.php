<?php 
namespace ProgrammerPemula\Belajar;

class Customer {
    public function __construct(string $name)
    {
    }

    public function sayHello(string $name): string
    {
        return "Hello $name, my name is $this->name";
    }
}




?>