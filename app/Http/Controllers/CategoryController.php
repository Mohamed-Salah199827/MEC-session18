<?php

namespace App\Http\Controllers;

use App\Http\Requests\CateogryReqeust;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createCategory(CateogryReqeust $request)
    {

        $cat=Category::create([
            'name'=>$request->name,
        ]);
        return response()->json( $cat);
    }
}
