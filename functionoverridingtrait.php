<?php 
class Manager
{
    private function test() : void
    {

    }
}
class VicePresident extends Manager
{
    public function test(string $nama) :int
    {
        return "hello";
    }
}
