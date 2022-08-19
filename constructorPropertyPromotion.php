<?php
class Produk
{
    public function __construct(
        public string $id,
        public string $name,
        public int $value = 0,
        public int $quantity = 0,
        private bool $expensive = false
    ) {
    }
}

$produk = new Produk(id: "1", name: "bakso", value: 10000);
echo $produk->name;
