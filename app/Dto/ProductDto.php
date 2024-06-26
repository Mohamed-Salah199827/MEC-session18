<?php

namespace App\Dto;

use App\Http\Requests\ProductRequest;

class ProductDto
{
    public function __construct(
        public string $title,
        public string $description,
        public float $price,
        public int $category_id,
        public string $image,
    )
    {
    }
    public static function create(ProductRequest $request):ProductDto{
        return new self(
          title: $request->title,
          description: $request->description,
          price: $request->price,
          category_id: $request->category_id,
          image: $request->image
        );
    }

}
