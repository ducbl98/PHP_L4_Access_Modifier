<?php


namespace Services;


class ProductManager
{
    private array $products;

    /**
     * ProductManager constructor.
     */
    public function __construct()
    {
        $this->products = [];
    }

    /**
     * @return array
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    public function add($product)
    {
        $this->products[] = $product;
    }

}