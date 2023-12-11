<?php
require_once __DIR__ . "/Product.php";

class ProductCirc extends Product
{


    public function __construct(
        string $name,
        float $priceVatFree,
        private int $diameter
    ) {
        parent::__construct($name, $priceVatFree);
    }

    public function getDiameter(): int
    {
        return $this->diameter;
    }

    public function setDiameter(int $diameter): self
    {
        $this->diameter = $diameter;
        return $this;
    }
}
