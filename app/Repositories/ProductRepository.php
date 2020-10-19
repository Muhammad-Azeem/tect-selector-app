<?php


namespace App\Repositories;


use App\Models\Product;

class ProductRepository
{
    protected $product;


    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function all()
    {
        return $this->product->all();
    }
    public function randomProducts(){
        return $this->product->all()->random(3);
    }
}
