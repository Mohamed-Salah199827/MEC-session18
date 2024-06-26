<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Services\Interfaces\OrderInterface;

class OrderController extends Controller
{
    public function createOrder(OrderRequest $request,OrderInterface $orderInterface){
        $createdOrder=$orderInterface->createOrder($request);
        return response()->json($createdOrder);
    }
}
