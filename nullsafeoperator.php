<?php
class Adress
{
    public ?string $country;
}
class user
{
    public ?Adress $address;
}

function sample(?user $user): ?string
{
    return $user?->address?->country;
}
echo Sample(null);
