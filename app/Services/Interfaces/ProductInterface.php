<?php

namespace App\Services\Interfaces;

use App\Dto\ProductDto;
use App\Http\Requests\ProductRequest;

interface ProductInterface
{
    public function createProduct(ProductDto $request);
    public function updateProduct(ProductRequest $request);

}
