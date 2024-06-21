<?php

namespace App\Services\Interfaces;

use App\Http\Requests\ProductRequest;

interface ProductInterface
{
    public function createProduct(ProductRequest $request);

}
