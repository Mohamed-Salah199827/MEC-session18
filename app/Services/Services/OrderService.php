<?php

namespace App\Services\Services;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Services\Interfaces\OrderInterface;

class OrderService implements OrderInterface
{

    public function createOrder(OrderRequest $request):Order
    {
        $order=Order::create([
            'user_id'=>$request->user_id,
            'total_price'=>$request->total_price,
            'comments'=>$request->comments,
        ]);
        return $order;

    }
}
