<?php

namespace App\Http\Controllers\api;

use App\Dto\ProductDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Services\Facades\ProductFacade;
use App\Services\Interfaces\ProductInterface;
use App\Services\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createProduct(ProductRequest $request)
    {
//        $productService=new ProductService();
//        $createdProduct=$productService->createProduct($request);

        return ProductFacade::createProduct(ProductDto::create($request));
        $createdProduct=$productInterface->createProduct($request);
        return response()->json($createdProduct);
    }
}
