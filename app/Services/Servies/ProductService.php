<?php

namespace App\Services\Servies;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\Interfaces\ProductInterface;

class ProductService implements ProductInterface
{

    public function createProduct(ProductRequest $request): Product
    {
        $name=null;
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'user_id'=>auth()->id(),
            'image' => $name
        ]);
        return $product;
    }
}
