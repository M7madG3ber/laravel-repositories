<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderRepository implements OrderRepositoryInterface
{
      public function all()
      {
            return Order::all();
      }

      public function findById($orderId)
      {
            return Order::where('id', $orderId)
                  ->firstOrFail();
      }

      public function create(Request $request)
      {
            Order::create($request->all());
      }
}