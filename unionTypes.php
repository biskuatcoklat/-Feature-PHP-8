<?php
class Example
{
    public string|int|bool|array $data;
}

$example = new Example();
$example->data = "wahyu";
$example->data = 100;
$example->data = true;
$example->data = [];

function sample(string|array $data): string|array
{
    if (is_array($data)) {
        return "array" . PHP_EOL;
    } else if (is_string($data)) {
        return "string" . PHP_EOL;
    }
}

var_dump(sample([]));
var_dump(sample("wahyu"));
