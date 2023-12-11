<?php

require_once __DIR__ . "/Product.php";


class ProductRect extends Product
{
    private int $width;
    private int $height;

    public function __construct(
        string $name,
        float $priceVatFree,
        int $width,
        int $height
    ) {
        parent::__construct($name, $priceVatFree); // Appel du constructeur parent
        $this->setWidth($width);
        $this->setHeight($height);
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function setWidth(int $width): void
    {
        $this->width = $width;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function setHeight(int $height): void
    {
        $this->height = $height;
    }
}
