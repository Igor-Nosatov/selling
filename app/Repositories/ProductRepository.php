<?php

namespace App\Repositories;

use App\Product;

class ProductRepository
{
  public function __construct(Product $product){
    $this->product = $product;
    }

  public function getProduct()
  {
    return $this->product->get();
  }
  
}
