<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductFormRequest;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::orderBy("id","desc")->paginate(10);
        return response()->json(["product"=> $products]);
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductFormRequest $request)
    {
       $product= product::create([
        "title"=> $request->title,
        "desc"=> $request->desc,
        "price"=> $request->price,
        "user_id"=> Auth::id()
       ]);

       return response()->json(["product"=> $product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
