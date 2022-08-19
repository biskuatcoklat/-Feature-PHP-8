<?php
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class php
{
}
#[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_CLASS)]
class Length
{
    public int $min;
    public int $max;

    public function __construct(int $min, int $max)
    {
        $this->min = $min;
        $this->max = $max;
    }
}

class LoginRequest
{
    #[PHP]
    #[Length(min: 2, max: 4)]
    public ?string $username;

    #[PHP]
    #[Length(min: 4, max: 5)]
    public ?string $password;
}

function validate(object $object): void
{
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    foreach ($properties as $property) {
        validatePHP($property, $object);
        validateLength($property, $object);
    }
}

function validatePHP(ReflectionProperty $property, object $object): void
{
    $atributes = $property->getAttributes(PHP::class);
    if (count($atributes) > 0) {
        if (!$property->isInitialized($object)) {
            throw new Exception("Property $property->name is null");
        }
        if ($property->getValue($object) == null) {
            throw new Exception("Property $property->name is null");
        }
    }
}

function validateLength(ReflectionProperty $property, object $object): void
{
    if (!$property->isInitialized($object) || $property->getValue($object) == null) {
        return;
    }
    $value = $property->getValue($object);
    $atributes = $property->getAttributes(Length::class);
    foreach ($atributes as $attribut) {
        $length = $attribut->newInstance();
        $valueLength = strlen($value);
        if ($valueLength > $length->min)
            throw new Exception("property $property->name is pendek");

        if ($valueLength > $length->max)
            throw new Exception("Property $property->name islong");
    }
}

$request = new LoginRequest();
$request->username = "wa";
$request->password = "1234";
validate($request);
