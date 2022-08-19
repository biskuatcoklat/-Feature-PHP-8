<?php 
function validate(string $value)
{
    if(trim($value) == " ")
    {
        throw new Exception("invalid string");
    }
}
try
{
    Validate(" ");

}catch(Exception)
{
    echo "invalid";
}
