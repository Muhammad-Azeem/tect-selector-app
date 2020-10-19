<?php


namespace App\Services;


use App\Repositories\ProductRepository;

class ProductService
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * ProductService constructor.
     * @param ProductRepository $productRepository
     */
    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function all()
    {
        return $this->productRepository->all();

    }
    public  function randomProducts() {
        return $this->productRepository->randomProducts() ;
    }
}
