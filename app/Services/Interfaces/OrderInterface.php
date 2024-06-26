<?php

namespace App\Services\Interfaces;

use App\Http\Requests\OrderRequest;

interface OrderInterface
{
    public function createOrder(OrderRequest $request);

}
