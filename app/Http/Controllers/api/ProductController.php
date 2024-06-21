<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Services\Servies\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(ProductRequest $request)
    {
        $productService=new ProductService();
        $createdProduct=$productService->createProduct($request);
        return response()->json($createdProduct);
    }
}
