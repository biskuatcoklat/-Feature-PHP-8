<?php 
function sayHello(Stringable $stringable)
{
    echo "hello {$stringable->__toString()}";
}

class Person
{
    public function __toString()
    {
        return "person";
    }
}
SayHello(new Person());
