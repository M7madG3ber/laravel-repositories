<?php

namespace App\Repositories;

use App\Models\Order;
use Illuminate\Http\Request;

interface OrderRepositoryInterface
{
      public function all();

      public function findById($orderId);

      public function create(Request $request);
}