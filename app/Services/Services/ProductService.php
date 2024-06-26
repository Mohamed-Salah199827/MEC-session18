<?php

namespace App\Services\Services;

use App\Dto\ProductDto;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\Interfaces\ProductInterface;

class ProductService implements ProductInterface
{


    public function createProduct(ProductDto $request): Product
    {
//        $name=null;
//        if ($request->hasFile('image')){
//            $image = $request->image;
//            $name = time().'.'.$image->getClientOriginalExtension();
//            $destinationPath = public_path('/images');
//            $image->move($destinationPath, $name);
//        }
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'user_id'=>auth()->id(),
            'image' => $request->image,
        ]);
        return $product;
    }
    //user //employee       //UserController (auth)  EmployeeController(auth)
    //authController (login,register,logout) //userController employeeController

    public function updateProduct(ProductRequest $request)
    {
        return 'update product';
    }
}
