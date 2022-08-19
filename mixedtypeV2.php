<?php
function testMix(mixed $data): mixed
{
    if (is_array($data)) {
        return [];
    } else if (is_string($data)) {
        return "string";
    } else if (is_int($data)) {
        return 100;
    } else {
        return null;
    }
}
var_dump(testMix([]));
var_dump(testMix("wahyu"));
var_dump(testMix(1));
