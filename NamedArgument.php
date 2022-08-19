<?php
function sayHello(string $first, string $middle, string $last): void
{
    echo "$first,$middle,$last" . PHP_EOL;
}
//default named argument
function sayHai(string $pertama, string $tengah = "", string $terakhir): void
{
    echo "$pertama,$tengah,$terakhir" . PHP_EOL;
}

//without namedArgument
//harus sesuai dengan urutan nya di parameter function
sayHello("wahyu", "aprilliandhika", "zaki");
echo PHP_EOL;

//with namedArgumnet
//tidak harus sesuai dengan paremeternya ,tapi harus memberikan inisialisai nya
sayHello(last: "zaki", first: "wahyu", middle: "aprilliandhika") . PHP_EOL;

//default namedargument
//without defaultnamedargument
//sayHai("wahyu", "aprilliandhika");// error

//with defaultnamedargument
sayHai(pertama: "wahyu", terakhir: "zaki");
