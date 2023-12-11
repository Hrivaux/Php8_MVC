<?php

class Product
{
    protected string $name;
    protected float $priceVatFree;

    public function __construct(string $name, float $priceVatFree)
    {
        $this->setName($name);
        $this->setPriceVatFree($priceVatFree);
    }

    public function getFullPrice(float $taxRate): float
    {
        if ($taxRate >= 1 || $taxRate < 0) {
            throw new InvalidArgumentException('Le taux doit être entre 0 et 1');
        }

        return $this->priceVatFree * (1 + $taxRate);
    }

    public function setName(string $name): void
    {
        if ($name === "") {
            throw new InvalidArgumentException('Le nom est obligatoire');
        }
        $this->name = $name;
    }

    public function setPriceVatFree(float $priceVatFree): void
    {
        if ($priceVatFree < 0) {
            throw new InvalidArgumentException('Le prix doit être un nombre positif');
        }
        $this->priceVatFree = $priceVatFree;
    }

    public function getPriceVatFree(): float
    {
        return $this->priceVatFree;
    }
}
