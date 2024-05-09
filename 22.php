<?php

class ParentClass
{
    function print()
    {
        echo "This method is called using child's object";

    }
}

class child extends ParentClass
{
    function display()
    {
        echo "this is child class";
    }
}

$childob = new child();
$childob->print();