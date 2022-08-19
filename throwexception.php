<?php

function sayHello(?string $name)
{
    $result = $name != null ? "hello $name" : throw new Exception("tidak boleh null");
    echo $result;
}
echo SayHello("wahyu");
