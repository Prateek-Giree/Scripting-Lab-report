<?php
class MyClass
{
    // Constructor
    public function __construct()
    {
        echo "Constructor is called: Object created<br>";
    }

    // Destructor
    public function __destruct()
    {
        echo "Destructor is called: Object destroyed<br>";
    }
}

// Creating objects
$obj1 = new MyClass();
$obj2 = new MyClass();